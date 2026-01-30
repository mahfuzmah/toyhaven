@extends('website.master')

@section('body')

    <div class="container py-5">
        <div class="d-flex flex-wrap product-detail gap-4">
            <!-- Left Side (Image) -->
            <div class="col-12 col-md-6 product-gallery">
                <img id="mainImage" src="{{ asset($product->image) }}" alt="Product Image">
                <div class="thumbnail-list d-flex mt-3">
                    <!-- Main Image -->
                    <img src="{{ asset($product->image) }}" alt="Main Image" onclick="changeImage(this)">
                    <!-- Other Images -->
                    @foreach($product->otherImage as $otherImage)
                        <img src="{{ asset($otherImage->image) }}" alt="Product Image" onclick="changeImage(this)">
                    @endforeach
                </div>
            </div>

            <!-- Right Side (Details) -->
            <div class="col-12 col-md-5">
                <h3>{{ $product->name }}</h3>
                <p class="price"></p>
                <p>{!! $product->short_description !!}</p>
{{--                <p>{!! $product->short_description !!}</p>--}}

                <div class="d-flex align-items-center mb-3">
                    <span class="ms-3">Total Price: <span id="totalPrice" class="price">TK. {{ $product->selling_price }}</span></span>
                </div>

                <!-- Add to Cart / Buy Now -->
                <div class="product-actions">
                    <form action="{{ route('cart.add') }}" method="POST" id="form-add-to-cart" class="mx-0 p-0">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="number" class="form-control text-center product-qty quantity-input" name="quantity" id="quantityInput" value="1" min="1" required>
                        <button type="submit" class="btn btn-custom px-4">ADD TO CART</button>
                    </form>

                    <form action="{{ route('cart.buyNow') }}" method="POST" id="form-buy-now" class="mx-0 p-0">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" id="buyNowQuantity" value="1">
                        <a href="{{ route('website.buy-now', ['id' => $product->id]) }}" class="btn btn-outline-secondary px-4">BUY NOW</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="mt-5">
            <ul class="nav nav-tabs" id="detailTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button">DETAILS</button>
                </li>
            </ul>
            <div class="tab-content" id="detailTabContent">
                <div class="tab-pane fade show active" id="details">
                    <p>{!! $product->long_description !!}</p>
                </div>
            </div>
            <style>
                #details .note-editable,
                #details,
                #details * { max-width: 100% !important; word-break: break-word !important; overflow-wrap: break-word !important; white-space: normal !important; }
                #details img { width: 100% !important; height: auto !important; }
            </style>
        </div>
    </div>

    {{-- Related Products --}}
    <section class="category-product section-ptb">
        <div class="container-fluid">
            <div class="collection-category">
                <div class="section-capture text-center">
                    <div class="section-title" data-animate="animate__fadeIn">
                        <h2 class="section-heading">Related Products</h2>
                    </div>
                </div>

                <div class="row row-mtm100 gx-0">
                    <div class="col-12">
                        <div class="collection-wrap">
                            <div class="collection-product-slider swiper" id="trend-product-slider">
                                <div class="swiper-wrapper">
                                    @foreach($relatedProducts as $related)
                                        <div class="swiper-slide" data-animate="animate__fadeIn">
                                            <div class="single-product">
                                                <div class="row single-product-wrap">
                                                    <div class="product-image-col">
                                                        <div class="product-image">
                                                            <a href="{{ route('product', ['id' => $related->id]) }}" class="pro-img">
                                                                <img src="{{ asset($related->image) }}" class="w-100 img-fluid img1" alt="{{ $related->name }}">
                                                            </a>
                                                            <div class="product-action-wrap">
                                                                <div class="product-action">
                                                                    <a href="{{ route('add-to-wishlist', ['id' => $related->id]) }}" class="add-to-wishlist">
                                                                        <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                        <span class="tooltip-text">wishlist</span>
                                                                    </a>
                                                                    <a href="javascript:void(0)" class="add-to-cart" data-id="{{ $related->id }}">
                                                                    <span class="product-icon">
                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line"></i></span>
                                                                        <span class="product-loader-icon icon-16" style="display:none;"><i class="ri-loader-4-line"></i></span>
                                                                        <span class="product-check-icon icon-16" style="display:none;"><i class="ri-check-line"></i></span>
                                                                    </span>
                                                                        <span class="tooltip-text">add to cart</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                            <span class="d-block heading-weight">
                                                                <a href="{{ route('product', ['id' => $related->id]) }}" class="primary-link">{{ $related->name }}</a>
                                                            </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <div class="price-box heading-weight">
                                                                    <span class="new-price primary-color">TK. {{ $related->regular_price }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-trend-product" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-trend-product" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-trend-product"></div>
                            </div>
                            <div class="view-button" data-animate="animate__fadeIn">
                                <a href="{{ route('products.all') }}" class="btn-style tertiary-btn">View all item</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
