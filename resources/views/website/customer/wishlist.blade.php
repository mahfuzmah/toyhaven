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
                        <li><a href="{{ route('home') }}"><i class="lni lni-home"></i> Dashboard</a></li>
                        <li>Wishlist</li>
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
                        <h4 class="text-center">My Wishlist</h4>
                        <p class="text-center text-success">{{ session('message') }}</p>
                        <hr/>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td>SL NO</td>
                                <td>Product id</td>
                                <td>Product Name</td>
                                <td>Product Image</td>
                                <td>Product Price</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $wishlistProduct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $wishlistProduct->product->id }}</td>
                                    <td>{{ $wishlistProduct->product->name }}</td>
                                    <td>
                                        <img src="{{ asset($wishlistProduct->product->image) }}" alt="" height="50" width="50"/>
                                    </td>
                                    <td>{{ $wishlistProduct->product->selling_price }}</td>
                                    <td>
                                        <a href="{{ route('product', ['id' => $wishlistProduct->product->id]) }}" class="btn btn-success btn-sm">Detail</a>
                                        <a href="{{ route('customer.wishlist-remove-product', ['id' => $wishlistProduct->product->id]) }}" class="btn btn-danger btn-sm">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
