<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use PDF;
use Illuminate\Http\Request;
use App\Models\Courier;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', ['orders' => Order::latest()->get()]);
    }

    public function detail($id)
    {
        return view('admin.order.detail', ['order' => Order::find($id)]);
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $couriers = Courier::all();

        if ($order->order_status == 'Complete')
        {
            return redirect('/admin/all-order')->with('message', 'Sorry .. this order can not be edited. Please contact with admin.');
        }
        else
        {
            return view('admin.order.edit', ['order' => Order::find($id), 'couriers' => $couriers]);
        }
        return $courier;
    }

    public function invoice($id)
    {
        return view('admin.order.invoice', ['order' => Order::find($id)]);
    }

    public function printInvoice($id)
    {
        $logoPath = public_path('admin/assets/images/brand/Untitled-2-01.png');
        $logoData = 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));

        $pdf = PDF::loadView('admin.order.download-invoice', [
            'order' => Order::find($id),
            'logoData' => $logoData,
        ]);
        return $pdf->download('invoice-'.$id.'.pdf');
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if ($request->order_status == 'Pending')
        {
            $order->order_status    = 'Pending';
            $order->delivery_status = 'Pending';
            $order->payment_status  = 'Pending';
        }
        elseif ($request->order_status == 'Processing')
        {
            $order->order_status        = 'Processing';
            $order->delivery_status     = 'Processing';
            $order->payment_status      = 'Processing';
            $order->delivery_address    = $request->delivery_address;
            $order->courier_id          = $request->courier_id;
        }
        elseif ($request->order_status == 'Complete')
        {
            $order->order_status    = 'Complete';
            $order->delivery_status = 'Complete';
            $order->payment_status  = 'Complete';
            $order->payment_amount  = $request->payment_amount;
            $order->payment_date    = date('Y-m-d');
            $order->payment_timestamp   = strtotime(date('Y-m-d'));

            foreach ($order->orderDetail as $orderDetail)
            {
                $product = Product::find($orderDetail->product_id);
                $product->stock_amount = $product->stock_amount - $orderDetail->qty;
                $product->save();
            }
        }
        elseif ($request->order_status == 'Cancel')
        {
            $order->order_status    = 'Cancel';
            $order->delivery_status = 'Cancel';
            $order->payment_status  = 'Cancel';
        }
        $order->save();
        return redirect('/admin/all-order')->with('message', 'Order info update successfully.');
    }

    public function delete(Request $request, $id)
    {
        $order = Order::find($id);
        if ($order->order_status == 'Cancel')
        {
            foreach ($order->orderDetail as $orderDetail)
            {
                $orderDetail->delete();
            }
            $order->delete();
            return redirect('/admin/all-order')->with('message', 'Order info delete successfully.');
        }
        else
        {
            return redirect('/admin/all-order')->with('message', 'Sorry .. this order can not be deleted.');
        }

    }
}
