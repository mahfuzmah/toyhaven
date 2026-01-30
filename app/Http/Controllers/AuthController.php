<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use function Carbon\Traits\to;
use function Illuminate\Support\password;
use function Livewire\of;


class AuthController extends Controller
{
    public function login()
    {
        return view('website.auth.login');
    }
    public function loginCheck(Request $request)
    {
        $customer  = Customer::where('email', $request->email)->first();
        if ($customer)
        {
            if (password_verify($request->password, $customer->password))
            {
                Session::put('customer_id', $customer->id);
                Session::put('customer_name', $customer->name);

                return redirect('/customer/dashboard');
            }
            else
            {
                return back()->with('message', 'sorry...Your password is invalid');
            }
        }
        else
        {
            return back()->with('message', ' Sorry --Your email is invalid');
        }
    }

    public function dashboard()
    {
        return view('website.auth.dashboard');
    }

    public function register()
    {
        return view('website.auth.register');
    }

    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }
    public function newCustomer(Request $request)
    {
        $request->validate([
        'name'  => 'required'
    ]);

        $customer   = new Customer();
        $customer->name     = $request->name;
        $customer->email    = $request->email;
        $customer->mobile   = $request->mobile;
        $customer->password = bcrypt($request->password);
        $customer->save();

        Session::put('customer_id', $customer->id);
        Session::put('customer_name', $customer->name);

        return redirect ('/customer/dashboard');
    }

}
