<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Session;

class CustomerProfileController extends Controller
{
    public function profile()
    {
        return view('website.customer.profile');
    }
    public function order()
    {
        return view('website.customer.order', ['orders'=>Order::where('customer_id', Session::get('customer_id'))->latest()->get()]);
    }

    public function wishlist()
    {
        return view('website.customer.wishlist',['products'=>Wishlist::where('customer_id', Session::get('customer_id'))->orderBy('id','desc')->get()]);
    }

    public function removeProduct($id)
    {
        Wishlist::find($id)->delete();
        return back()->with('message','Wishlist product info delete successfully.');
    }
    public function myPayment()
    {
        return view('website.customer.my-payment');
    }
    public function password()
    {
        return view('website.customer.change-password');
    }


}
