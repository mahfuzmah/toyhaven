@extends('website.master')

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Customer Dashboard</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Dashboard</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="account-login section">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-md-3">
                    <div class="card card-body account-sidebar">
                        <div class="list-group">
                            <div class="list-group-item active-heading">
                                Dashboard
                            </div>
                            <a href="{{route('customer.profile')}}" class="list-group-item list-group-item-action">My Profile</a>
                            <a href="{{route('customer.my-order')}}" class="list-group-item list-group-item-action">My Orders</a>
                            <a href="{{route('customer.wishlist')}}" class="list-group-item list-group-item-action">My Wishlist</a>
                            <a href="{{route('customer.my-payment')}}" class="list-group-item list-group-item-action">My Payment</a>
                            <a href="{{route('customer.change-password')}}" class="list-group-item list-group-item-action">Change Password</a>
                            <a href="{{route('customer.logout')}}" class="list-group-item list-group-item-action text-danger">Logout</a>
                        </div>
                    </div>
                </div>

                <!-- Dashboard -->
                <div class="col-md-9">
                    <div class="card card-body">
                        <h4>My Dashboard</h4>
                        <br>
                        <h6>Welcome {{ Session::get('customer_id') }}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
