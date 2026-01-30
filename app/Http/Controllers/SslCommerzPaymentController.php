<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\OrderDetail;
use Session;
use Cart;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use PDF;

class SslCommerzPaymentController extends Controller
{
    public $customer;
    public function exampleEasyCheckout()
    {
        return view('website.checkout.exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('website.checkout.exampleHosted');
    }

    public function index($request, $customer)
    {

        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = [];

        $post_data['total_amount'] = Session::get('payment_amount');

        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $customer->name;
        $post_data['cus_email'] = $customer->email;
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $customer->mobile;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Games and toys for babies";
        $post_data['product_category'] = "Toys";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = $customer->id;
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        $update_product = Order::updateOrCreate(
            ['transaction_id' => $post_data['tran_id']],
            [
                'customer_id'       => $customer->id,
                'payment_amount'    => Session::get('payment_amount'),
                'order_total'       => Session::get('order_total'),
                'shipping_total'    => Session::get('shipping_total'),
                'order_date'        => date('Y-m-d'),
                'tax_total'         => Session::get('tax_total'),
                'order_timestamp'   => now(),
                'delivery_address'  => Session::get('delivery_address'),
                'payment_method'    => $request->payment_method,
                'currency'          => $post_data['currency'],
                'cart_backup'       => json_encode(Cart::content()),
            ]
        );


        $sslc = new SslCommerzNotification();
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }





    public function success(Request $request)
    {

        $customer = Customer::find($request->input('value_a'));

        Session::put('customer_id', $customer->id);
        Session::put('customer_name', $customer->name);


        echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $payment_amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('id', 'customer_id', 'order_total', 'shipping_total', 'tax_total', 'delivery_address', 'transaction_id', 'order_status', 'currency', 'payment_amount')->first();

        if ($order_details->order_status == 'Pending') {
            $sslc = new SslCommerzNotification();
            $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->payment_amount, $order_details->currency); // 'amount' এর বদলে 'order_total' ব্যবহার করা হয়েছে

            if ($validation == TRUE) {

                // ১. অর্ডার স্ট্যাটাস আপডেট
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['order_status' => 'Processing', 'payment_status' => 'Paid', 'payment_amount' => $payment_amount]);

                $customer = Customer::find($order_details->customer_id);
                $orderId = $order_details->id;


                // ✅ ১. ব্যাকআপ থেকে ডেটা পুনরুদ্ধার (এই ডেটা সম্ভবত Object Collection)
//                $backupItems = Session::get('cart_backup');

                $order = Order::where('transaction_id', $tran_id)->first();

                if (!$order || !$order->cart_backup) {
                    return redirect('/checkout/cancel')->with('message', 'Cart data missing.');
                }

                $backupItems = json_decode($order->cart_backup);

//                if ($backupItems) {
//                    $backupItems = json_decode($backupItems);
//                } else {
//                    $backupItems = collect([]);
//                }

                if (!$backupItems) { // Null check
                    $backupItems = collect([]); // যদি খালি থাকে, একটি খালি কালেকশন সেট করুন
                }

                $mailItems = []; // ✅ মেইল পাঠানোর জন্য পরিষ্কার একটি নতুন অ্যারে তৈরি

                foreach ($backupItems as $item)
                {
                    // OrderDetail সেভ করা (Object Property Access: -> ব্যবহার করুন)
                    $orderDetail = new OrderDetail();
                    $orderDetail->order_id   = $orderId;
                    $orderDetail->product_id = $item->id; // Object ID
                    $orderDetail->name       = $item->name;
                    $orderDetail->image      = $item->options->image;
                    $orderDetail->price      = $item->price;
                    $orderDetail->qty        = $item->qty;
                    $orderDetail->save();

                    // মেইলের জন্য ডেটা কপি (Object Property Access: -> ব্যবহার করুন)
                    $mailItems[] = [
                        'name'  => $item->name,
                        'price' => $item->price,
                        'qty'   => $item->qty,
                        'image' => $item->options->image
                    ];

                }

                // ✅ ADD INVOICE GENERATION HERE (before sending email)
                $logoPath = public_path('admin/assets/images/brand/Untitled-2-01.png');
                $logoData = 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));


                $pdf = PDF::loadView('admin.order.download-invoice', [
                    'order'    => $order,
                    'logoData' => $logoData,
                ])->setPaper('A4');

                $folder = public_path('upload/invoices');
                if (!file_exists($folder)) {
                    mkdir($folder, 0755, true);
                }

                $fileName = $order->invoice_number . '.pdf';
                $fullPath = "$folder/$fileName";
                $pdf->save($fullPath);

                // ৪. ইমেলের জন্য ডেটা তৈরি (CheckoutController-এর মতো)
                $data = [
                    'customer_name'    => $customer->name,
                    'customer_email'   => $customer->email,
                    'order_id'         => $orderId,
                    'order_date'       => date('F j, Y, g:i a'),
                    'delivery_address' => $order_details->delivery_address,
                    'payment_method'   => 'Online Payment (SSLCommerz)',
                    'order_total'      => $order_details->order_total,
                    'shipping_total'   => $order_details->shipping_total,
                    'tax_total'        => $order_details->tax_total,
                    'items'            => $mailItems, // ✅ সঠিক ভেরিয়েবল ব্যবহার
                    'message_title'    => 'Your Order Confirmation (Online Payment) - ToyHavenBD',
                    'invoice_number'   => $order->invoice_number,  // ✅ Add this
                    'invoice_path'     => $fullPath,
                ];

                // ৫. ইমেল প্রেরণ
                Mail::to($customer->email)->send(new SendEmail($data));

                // ৬. Cart এবং ব্যাকআপ সেশন দুটোই খালি করুন
                Cart::destroy();

                // ✅ ফিক্স: Order Total সংক্রান্ত সেশনগুলি মুছে ফেলা হচ্ছে
                Session::forget('order_total');
                Session::forget('tax_total');
                Session::forget('shipping_total');
                Session::forget('delivery_address');
                Session::forget('cart_backup');

                // ৭. ব্যবহারকারীকে সফল পেজে রিডাইরেক্ট
                return redirect('/checkout/complete-order')
                    ->with('message', 'Online Order successfully completed and Payment is successful!');
            }
            else {
                // ✅ VALIDATION FAILED - Handle like fail/cancel

                // Update order status to Failed
                DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['order_status' => 'Validation Failed', 'payment_amount' => 0]);

                // ✅ RESTORE CART from backup
                if ($order_details->cart_backup) {
                    $cartItems = json_decode($order_details->cart_backup);
                    Cart::destroy();

                    foreach ($cartItems as $item) {
                        Cart::add([
                            'id'      => $item->id,
                            'name'    => $item->name,
                            'qty'     => $item->qty,
                            'price'   => $item->price,
                            'weight'  => $item->weight ?? 0,
                            'options' => [
                                'image' => $item->options->image ?? 'default.jpg'
                            ]
                        ]);
                    }
                }

                return redirect('/checkout/index')
                    ->with('error', 'Payment validation failed. Please try again.');
            }
//            return redirect('/checkout/index')->with('error', 'Payment Failed. Please try again.');

        } else if ($order_details->order_status == 'Processing' || $order_details->order_status == 'Complete') {

            return redirect('/checkout/complete-order')
                ->with('message', 'Transaction is already successfully Completed.');
        } else {
            /*
            That means something wrong happened. You can redirect customer to your product page.
            */
            return redirect('/checkout/cancel')
                ->with('message', 'Invalid Transaction or Status.');
        }

    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'order_status', 'currency', 'order_total', 'cart_backup', 'customer_id')->first();

        if ($order_details->order_status == 'Pending') {
            DB::table('orders')
                ->where('transaction_id', $tran_id)
//                ->update(['order_status' => 'Failed');
                ->update(['order_status' => 'Failed', 'payment_amount' => 0]);

            $customer = Customer::find($order_details->customer_id);
            Session::put('customer_id', $customer->id);
            Session::put('customer_name', $customer->name);

            // ✅ RESTORE CART from backup
            if ($order_details->cart_backup) {
                $cartItems = json_decode($order_details->cart_backup);

                // Clear current cart first
                Cart::destroy();

                // Re-add items from backup
                foreach ($cartItems as $item) {
                    Cart::add([
                        'id'      => $item->id,
                        'name'    => $item->name,
                        'qty'     => $item->qty,
                        'price'   => $item->price,
                        'weight'  => $item->weight ?? 0,
                        'options' => [
                            'image' => $item->options->image ?? 'default.jpg'
                        ]
                    ]);
                }
            }

            return redirect('/checkout/index')->with('error', 'Payment Failed. Please try again.');

        } else if ($order_details->order_status == 'Processing' || $order_details->order_status == 'Complete') {
            return redirect('/checkout/complete-order')->with('message', 'Transaction already successful');
        } else {
            return redirect('/checkout/index')->with('error', 'Invalid Transaction');
        }
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'order_status', 'currency', 'order_total', 'cart_backup', 'customer_id')->first();

        if ($order_details->order_status == 'Pending') {
            // Update order status to Canceled
            DB::table('orders')
                ->where('transaction_id', $tran_id)
//                ->update(['order_status' => 'Canceled');
                ->update(['order_status' => 'Canceled', 'payment_amount' => 0]);

            // Restore customer session
            $customer = Customer::find($order_details->customer_id);
            Session::put('customer_id', $customer->id);
            Session::put('customer_name', $customer->name);

            // ✅ RESTORE CART from backup
            if ($order_details->cart_backup) {
                $cartItems = json_decode($order_details->cart_backup);

                Cart::destroy();

                foreach ($cartItems as $item) {
                    Cart::add([
                        'id'      => $item->id,
                        'name'    => $item->name,
                        'qty'     => $item->qty,
                        'price'   => $item->price,
                        'weight'  => $item->weight ?? 0,
                        'options' => [
                            'image' => $item->options->image ?? 'default.jpg'
                        ]
                    ]);
                }
            }

            return redirect('/checkout/index')->with('message', 'Payment was cancelled. You can try again.');

        } else if ($order_details->order_status == 'Processing' || $order_details->order_status == 'Complete') {
            return redirect('/checkout/complete-order')->with('message', 'Transaction already successful');
        } else {
            return redirect('/checkout/index')->with('error', 'Invalid Transaction');
        }
    }




    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'order_status', 'currency', 'order_total')->first();

            if ($order_details->order_status  == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['order_status' => 'Processing']);

                    echo "Transaction is successfully Completed";
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'customer_id'       => 25,
                'order_total'       => $post_data['total_amount'],
                'shipping_total'    => 100,
                'order_date'        => date('Y-m-d'),
                'tax_total'         =>12,
                'order_timestamp'   => strtotime(date('Y-m-d')),
                'delivery_address'  => 'Dhaka',
                'payment_method'    => 'Online',
                'transaction_id'    => $post_data['tran_id'],
                'currency'          => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }


}
