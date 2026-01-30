@extends('website.master')

@section('body')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="{{asset('/')}}website/assets/image/other/Untitled-1.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="{{route('home')}}" class="extra-color">Home</a> / Category</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Category View</h2>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <main id="main">
        <section class="shop-content section-ptb">
            <form id="shopForm" action="{{ url()->current() }}" method="GET">
                <div class="container">
                    <div class="row align-items-xl-start">

                        <!-- shop-sidebar start -->
                        <div class="col-12 col-xl-3 p-xl-sticky top-0">
                            <div class="shop-sidebar-wrap shop-filter-sidebar" data-animate="animate__fadeIn">
                                <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>

                                <!-- Categories -->
                                <div class="shop-sidebar shop-categories">
                                    <h6 class="font-18">Categories</h6>
                                    <div class="shop-cat-post mst-21">
                                        <div class="shop-cat ul-mtm-15">
                                            @foreach($categories as $category)
                                                <a href="{{route('category', ['id' => $category->id])}}" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>{{$category->name}}</span>
                                                    <span>{{ $category->products_count }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Other sidebar filters ... (stock, price, material) unchanged -->

                            </div>
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- Products -->
                        <div class="col-12 col-xl-9 p-xl-sticky top-0">
                            <div class="shop-product-wrap data-grid">
                                <div class="row row-mtm">
                                    @forelse($products as $product)
                                        <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product">
                                                <div class="row single-product-wrap">

                                                    <!-- IMAGE -->
                                                    <div class="product-image-col">
                                                        <div class="product-image">
                                                            <a href="{{ route('product', ['id' => $product->id]) }}" class="pro-img">
                                                                <img src="{{ asset($product->image) }}" class="w-100 img-fluid img1" alt="{{ $product->name }}">
                                                            </a>

                                                            <!-- ACTION -->
                                                            <div class="product-action-wrap">
                                                                <div class="product-action">
                                                                    <a href="{{ route('add-to-wishlist', ['slug' => $product->slug]) }}" class="add-to-wishlist">
                                                                    <span class="product-icon">
                                                                        <i class="ri-heart-line icon-16"></i>
                                                                    </span>
                                                                    </a>

                                                                    <a href="javascript:void(0)" class="add-to-cart" data-id="{{ $product->id }}">
                                                                    <span class="product-icon">
                                                                        <i class="ri-shopping-bag-3-line icon-16"></i>
                                                                    </span>
                                                                    </a>

                                                                    <a href="#quickview-modal"
                                                                       data-bs-toggle="modal"
                                                                       class="quick-view"
                                                                       data-id="{{ $product->id }}"
                                                                       data-name="{{ $product->name }}"
                                                                       data-price="{{ $product->selling_price }}"
                                                                       data-category="{{ $product->category->name }}"
                                                                       data-stock="{{ $product->stock ?? 0 }}"
                                                                       data-description="{{ Str::limit(strip_tags($product->short_description),150) }}"
                                                                       data-image-main="{{ asset($product->image) }}"
                                                                       @foreach($product->otherImage as $key => $img)
                                                                       data-image{{ $key+1 }}="{{ asset($img->image) }}"
                                                                        @endforeach>
                                                                    <span class="product-icon">
                                                                        <i class="ri-eye-line icon-16"></i>
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- CONTENT -->
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <a href="{{ route('product', ['id' => $product->id]) }}" class="primary-link heading-weight">
