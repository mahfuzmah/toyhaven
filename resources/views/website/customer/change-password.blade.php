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
                    @include('website.customer.customer-menu')
                </div>

                <!-- Dashboard -->
                <div class="col-md-9">
                    <div class="card card-body">
                        <h4>My Dashboard</h4>
                        <br>
                        <h6>Welcome {{ Session::get('customer_name') }}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
