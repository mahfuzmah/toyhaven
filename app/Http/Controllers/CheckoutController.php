<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;
use Cart;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\SslCommerzPaymentController;
use DB;
use PDF;

class CheckoutController extends Controller
{
    public $customer, $order, $orderDetail;

    public function index()
    {
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {
            $this->customer = '';
        }

        return view('website.checkout.index', [
            'customer'  => $this->customer,
            'total_qty' => Cart::count(),
        ]);
    }


    public function newOrder(Request $request)
    {
        // Check if cart is empty first
        if (Cart::count() == 0) {
            return redirect()->back()->with('error', 'Your cart is empty');
        }

        // Determine if customer info is required based on session
        $hasCustomerSession = Session::get('customer_id') ? true : false;

        // Validate inputs - customer info only required for new customers
        $validated = $request->validate([
            'name' => $hasCustomerSession ? 'nullable|string|max:255' : 'required|string|max:255',
            'email' => $hasCustomerSession ? 'nullable|email|max:255' : 'required|email|max:255',
            'mobile' => $hasCustomerSession ? 'nullable|string|regex:/^[0-9]{10,15}$/|max:15' : 'required|string|regex:/^[0-9]{10,15}$/|max:15',
            'order_total' => 'required|numeric|min:0',
            'tax_total' => 'required|numeric|min:0',
            'shipping_total' => 'required|numeric|min:0',
            'delivery_address' => 'required|string|max:1000',
            'payment_method' => 'required|in:cash,online',
        ]);

        // CRITICAL: Recalculate totals server-side to prevent price manipulation
        $calculatedSubtotal = 0;
        foreach (Cart::content() as $item) {
            $calculatedSubtotal += ($item->price * $item->qty);
        }

        $calculatedTotal = $calculatedSubtotal + $validated['tax_total'] + $validated['shipping_total'];

        // Verify client-submitted total matches server calculation (allow 1 cent difference for rounding)
        if (abs($calculatedTotal - $validated['order_total']) > 0.01) {
            return redirect()->back()->with('error', 'Order total mismatch. Please refresh and try again.');
        }

        // Customer create or find
        if ($hasCustomerSession) {
            $this->customer = Customer::find(Session::get('customer_id'));

            // If session exists but customer deleted, clear session
            if (!$this->customer) {
                Session::forget(['customer_id', 'customer_name']);
                return redirect()->back()->with('error', 'Session expired. Please try again.');
            }
        } else {
            // Use firstOrCreate to prevent race conditions
            $this->customer = Customer::firstOrCreate(
                ['email' => $validated['email']],
                [
                    'name' => $validated['name'],
                    'mobile' => $validated['mobile'],
                    'password' => bcrypt($validated['mobile'])
                ]
            );

            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        /*-------------------------------
            CASH ON DELIVERY
        -------------------------------*/
        if ($validated['payment_method'] == 'cash')
        {
            try {
                // Start database transaction
                DB::beginTransaction();

                // Create Order
                $this->order = new Order();
                $this->order->customer_id = $this->customer->id;
                $this->order->order_total = $validated['order_total'];
                $this->order->tax_total = $validated['tax_total'];
                $this->order->shipping_total = $validated['shipping_total'];
                $this->order->order_date = date('Y-m-d');
                $this->order->order_timestamp = now();
                $this->order->delivery_address = $validated['delivery_address'];
                $this->order->payment_method = $validated['payment_method'];
                $this->order->save();

                // Copy cart items before clearing
                $cartItems = [];

                foreach (Cart::content() as $item)
                {
                    $imageName = optional($item->options)->image ?? 'default.jpg';

                    $imagePath = public_path('admin/assets/images/product-images/' . $imageName);

                    $cartItems[] = [
                        'name' => $item->name,
                        'price' => $item->price,
                        'qty' => $item->qty,
                        'image' => file_exists($imagePath) ? $imagePath : null,
//                        'image' => optional($item->options)->image ?? 'default.jpg'
                    ];

                    // Save order details in DB
                    $this->orderDetail = new OrderDetail();
                    $this->orderDetail->order_id = $this->order->id;
                    $this->orderDetail->product_id = $item->id;
                    $this->orderDetail->name = $item->name;
                    $this->orderDetail->image = optional($item->options)->image ?? 'default.jpg';
                    $this->orderDetail->price = $item->price;
                    $this->orderDetail->qty = $item->qty;
                    $this->orderDetail->save();
                }

                $logoPath = public_path('admin/assets/images/brand/Untitled-2-01.png');
                $logoData = 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));

                $this->order->refresh();

                $pdf = PDF::loadView('admin.order.download-invoice', [
                    'order'       => $this->order,
                    'logoData'      => $logoData,
                ])->setPaper('A4');

                $folder = public_path('upload/invoices');
                if (!file_exists($folder)) {
                    mkdir($folder, 0755, true);
                }

                $fileName = $this->order->invoice_number . '.pdf';
                $fullPath = "$folder/$fileName";
                $pdf->save($fullPath);

                $invoiceUrl = asset('upload/invoices/' . $fileName);

                // Commit transaction
                DB::commit();

                // Prepare email data
                $data = [
                    'customer_name' => $this->customer->name,
                    'customer_email' => $this->customer->email,
                    'order_id' => $this->order->id,
                    'order_date' => date('F j, Y, g:i a'),
                    'delivery_address' => $this->order->delivery_address,
                    'payment_method' => 'Cash On Delivery',
                    'order_total' => $this->order->order_total,
                    'shipping_total' => $this->order->shipping_total,
                    'tax_total' => $this->order->tax_total,
                    'items' => $cartItems,
                    'message_title' => 'Your Order Confirmation - ToyHavenBD',
                    'invoice_number' => $this->order->invoice_number,
                    'invoice_path' => $fullPath,
                ];

                // Send Email (wrapped in try-catch so cart still clears if email fails)
                try {
                    Mail::to($this->customer->email)->send(new SendEmail($data));
                } catch (\Exception $e) {
                    // Log email error but don't stop the order process
                    \Log::error('Order confirmation email failed', [
                        'order_id' => $this->order->id,
                        'customer_email' => $this->customer->email,
                        'error' => $e->getMessage()
                    ]);
                }

                // Clear cart only after successful order creation
                Cart::destroy();

                return redirect('/checkout/complete-order')
                    ->with('message', 'Order info successfully completed');

            } catch (\Exception $e) {
                // Rollback transaction on any error
                DB::rollBack();

                \Log::error('Order creation failed', [
                    'customer_id' => $this->customer->id ?? null,
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);

                return redirect()->back()
                    ->with('error', 'Order creation failed. Please try again.')
                    ->withInput();
            }
        }

        /*-------------------------------
            ONLINE PAYMENT
        -------------------------------*/
        elseif ($validated['payment_method'] == 'online')
        {

            try {
                // Calculate discount (on validated subtotal, not manipulated client total)
                $discountPercentage = 7.5;
                $originalTotal = $calculatedSubtotal; // Use server-calculated subtotal
                $discountAmount = round(($originalTotal * $discountPercentage) / 100, 2);
                $discountedTotal = $originalTotal - $discountAmount + $validated['shipping_total'];

                // Create order timestamp
                $orderTimestamp = strtotime(date('Y-m-d'));

                // Store payment information in session
                Session::put('payment_amount', $discountedTotal);
                Session::put('order_total', $validated['order_total']);
                Session::put('tax_total', $validated['tax_total']);
                Session::put('shipping_total', $validated['shipping_total']);
                Session::put('order_timestamp', $orderTimestamp);
                Session::put('delivery_address', $validated['delivery_address']);

                // Backup cart using JSON (more secure than serialize)
                $cartBackup = json_encode(Cart::content());
                Session::put('cart_backup', $cartBackup);

                \Log::info('Session before SSL', [
                    'payment_amount' => Session::get('payment_amount'),
                    'all_session' => Session::all()
                ]);

                // Redirect to payment gateway
                $ssl = new SslCommerzPaymentController();


                return $ssl->index($request, $this->customer);

            } catch (\Exception $e) {
                \Log::error('Payment initialization failed', [
                    'customer_id' => $this->customer->id,
                    'error' => $e->getMessage()
                ]);

                return redirect()->back()
                    ->with('error', 'Payment initialization failed. Please try again.')
                    ->withInput();
            }
        }
    }


    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
