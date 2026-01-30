<div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Cart</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="{{route('products.all')}}">Shop</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{---------------------------main cart design start------------------------------}}


    <main id="main">
        <!-- cart start -->
        <section class="cart-area section-pt">
            <div class="container">
                <div class="row row-mtm align-items-lg-start">
                    <div class="col-12 col-lg-8 p-lg-sticky top-0">
                        <div class="cart-itemview">
                            <div class="cart-title d-flex align-items-center justify-content-between peb-30 beb"
                                >
                                <h6 class="font-18">Shopping cart</h6>
                                <span class="cart-count"><span class="cart-counter">{{ $total_qty }}</span> Items</span>
                            </div>
                            <div class="cart-table">
                                <div class="cart-table-heading d-none d-md-block ptb-30 beb"
                                    >
                                    <div class="row">
                                        <div class="col-md-5 heading-color heading-weight">Product</div>
                                        <div class="col-md-3 heading-color heading-weight">Qty</div>
                                        <div class="col-md-2 heading-color heading-weight">Total</div>
                                        <div class="col-md-2 heading-color heading-weight text-end">Remove</div>
                                    </div>
                                </div>
                                @php($sum=0)
                                @foreach($cart_products as $cart_product)
                                    <div class="cart-table-data" wire:key="{{ $cart_product->rowId }}">
                                        <div class="cart-table-info ptb-30 beb">
                                            <div class="row row-mtm30">
                                                <div class="col-12 col-md-5">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Product
                                                    </div>
                                                    <div class="cart-item-content d-flex flex-wrap">
                                                        <div class="cart-item-image width-88">
                                                            <a href="{{route('product', ['id' => $cart_product->id])}}"
                                                               target="_blank" class="d-block br-hidden"><img
                                                                    src="{{asset($cart_product->options->image)}}"
                                                                    class="w-100 img-fluid" alt="cart-1"></a>
                                                        </div>
                                                        <div class="cart-item-info width-calc-88 psl-15">
                                                            <a href="{{route('product', ['id' => $cart_product->id])}}"
                                                               target="_blank"
                                                               class="primary-link heading-weight">{{$cart_product->name}}</a>
                                                            <span
                                                                class="d-block heading-color mst-7 heading-weight">TK. {{$cart_product->price}}</span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-6 col-sm-4 col-md-3">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Qty</div>
                                                    <div class="js-qty-wrapper">
                                                        <div class="count-input">
                                                            
                                                                <div class="input-group">
                                                                    <input type="number" 
                                                                           wire:model.live.debounce.200ms="quantities.{{$cart_product->rowId}}" 
                                                                           class="form-control" 
                                                                           min="1"
                                                                           required/>
                                                                </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="text-danger font-14 mst-7"><span
                                                            class="heading-weight"></span></div>
                                                </div>
                                                <div class="col-3 col-sm-4 col-md-2">
                                                    <div class="d-md-none heading-color heading-weight meb-7">Total
                                                    </div>
                                                    <div class="cart-total-price heading-color heading-weight">
                                                        Tk. {{$cart_product->price * $cart_product->qty}}</div>
                                                </div>
                                                <div class="col-3 col-sm-4 col-md-2 text-end">
                                                    <div class="d-md-none heading-color heading-weight meb-11">Option
                                                    </div>
                                                    <a href="javascript:void(0)"
                                                       wire:click="remove('{{ $cart_product->rowId }}')"
                                                       class="cart-remove text-danger icon-16"
                                                       aria-label="Remove item">
                                                        <i class="ri-delete-bin-line d-block lh-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                                @endforeach
                                <div class="cart-table-button d-flex flex-wrap justify-content-sm-between mst-30"
                                    >
                                    <a href="{{route('products.all')}}"
                                       class="width-100 width-sm-auto btn-style quaternary-btn">Continue shopping</a>
                                    <a href="javascript:void(0)"
                                       wire:click="clear"
                                       class="width-100 width-sm-auto btn-style secondary-btn mst-15 mst-sm-0"
                                       wire:confirm="Are you sure you want to clear the entire cart?">
                                        Clear Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-lg-sticky top-0">
                        <div class="row row-mtm">
                            <div class="col-12">
                                <div class="cart-coupan ptb-30 plr-15 plr-md-30 body-bg border-full border-radius">
                                    <div class="cart-orderview">
                                        <h6 class="font-18 meb-21">Have a coupan code?</h6>
                                        <div class="cart-info">
                                            <div
                                                class="cart-discount-title d-flex align-items-center justify-content-between">

                                            </div>
                                            <div class="cart-detail mst-12">
                                                <div class="cart-detail-info d-none">
                                                    <!-- cart-info discount-code start -->
                                                    <div class="ul-mt5 align-items-center heading-weight">
                                                        <span class="text-danger"></span>
                                                        <span class="text-danger"></span>
                                                        <span class="heading-color">applied</span>
                                                    </div>
                                                    <!-- cart-info discount-code end -->
                                                </div>
                                                <div class="cart-detail-form">
                                                    <div class="cart-detail-field">
                                                        <div class="row field-row">
                                                            <div class="col-12 field-col">
                                                                <label for="cart-discount" class="field-label"></label>
                                                                <div class="d-md-flex">
                                                                    <input type="text" id="cart-discount"
                                                                           name="cart-discount"
                                                                           class="cart-dis-input width-100 height-md-auto text-center text-md-start"
                                                                           value="" placeholder="Discount code"
                                                                           autocomplete="off" required>
                                                                    <button type="submit"
                                                                            class="cart-dis-btn cart-dis-apply-btn width-100 width-md-auto btn-style secondary-btn mst-15 mst-md-0 text-nowrap">
                                                                        Apply
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cart-summary ptb-30 plr-15 plr-md-30 extra-bg border-radius">
                                    <div class="cart-costview">
                                        <h6 class="font-18 meb-21">Order summary</h6>
                                        <div class="cart-cost">
                                            <div class="row row-mtm20">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <span>Subtotal</span>
                                                    <span class="heading-color heading-weight">Tk. <span
                                                            id="totalValue">{{$sum}}</span> </span>
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <span>Discount</span>
                                                    <span class="text-danger heading-weight"
                                                          id="taxValue">{{$tax = round( ($sum * 0) ) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-cost mst-30 pst-30 bst">
                                            <div class="row row-mtm20">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <span>Total</span>
                                                    <span class="heading-color heading-weight">Tk.  <span
                                                            id="totalRes">{{$sum + $tax }}</span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-button mst-30">
                                        <a href="{{route('checkout.index')}}" class="w-100 btn-style secondary-btn">Checkout</a>
                                        <span class="d-block font-12 mst-13"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart end -->
        <!-- cart-collection start -->
        <section class="cart-collection section-ptb">
            <div class="container">
                <div class="collection-category">
                    <div class="section-capture text-center">
                        <div class="section-title">
                            <h2 class="section-heading">You may also like</h2>
                        </div>
                    </div>
                    <div class="collection-wrap" wire:ignore>
                        <div class="cart-slider swiper" id="cart-slider">
                            <div class="swiper-wrapper">
                                @foreach($products as $product)
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="row single-product-wrap">
                                                <div class="product-image-col">
                                                    <div class="product-image">
                                                        <a href="{{route('product', ['id' => $product->id])}}"
                                                           class="pro-img">
                                                            <img src="{{asset($product->image)}}"
                                                                 class="w-100 img-fluid img1" alt="p-1">
                                                        </a>
                                                        <div class="product-action-wrap">
                                                            <div class="product-action">
                                                                <a href="{{ route('add-to-wishlist',['id' => $product->id]) }}"
                                                                   class="add-to-wishlist">
                                                                    <span class="product-icon"><i
                                                                            class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-cart"
                                                                   data-id="{{ $product->id }}">
                                                                                <span class="product-icon">
                                                                                    <span
                                                                                        class="product-bag-icon icon-16"><i
                                                                                            class="ri-shopping-bag-3-line"></i></span>
                                                                                    <span
                                                                                        class="product-loader-icon icon-16"
                                                                                        style="display:none;"><i
                                                                                            class="ri-loader-4-line"></i></span>
                                                                                    <span
                                                                                        class="product-check-icon icon-16"
                                                                                        style="display:none;"><i
                                                                                            class="ri-check-line"></i></span>
                                                                                </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                
                                                                <a href="#quickview-modal"
                                                                   data-bs-toggle="modal"
                                                                   class="quick-view"
                                                                   data-id="{{ $product->id }}"
                                                                   data-name="{{ $product->name }}"
                                                                   data-price="{{ $product->selling_price }}"
                                                                   data-category="{{ $product->category->name }}"
                                                                   data-stock="{{ $product->stock ?? 0 }}"
                                                                   data-description="{{ Str::limit(strip_tags($product->short_description), 150) }}"
                                                                   data-image-main="{{ asset($product->image) }}"
                                                                   @foreach($product->otherImage as $key => $otherImage)
                                                                   data-image{{ $key+1 }}="{{ asset($otherImage->image) }}"
                                                                    @endforeach>
                                                                    <span class="product-icon"><i
                                                                            class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">quickview</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-content">
                                                        <div class="product-title">
                                                            <span class="d-block meb-7"></span>
                                                            <span class="d-block heading-weight">
                                                                    <a href="{{route('product', ['id' => $product->id])}}"
                                                                       class="primary-link">{{$product->name}}</a>
                                                                </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="price-box heading-weight">
                                                                <span
                                                                    class="new-price primary-color">TK. {{$product->selling_price}}</span>
                                                                <span class="old-price"><span class="mer-3"></span><span
                                                                        class="text-decoration-line-through"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">4.0<span
                                                                                class="review-caption">2 reviews</span></span>
                                                                    </span>
                                                        </div>
                                                        <div class="product-description">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry It is a long established fact that
                                                                a will be distracted by the readable of at</p>
                                                        </div>
                                                        <div class="product-action-wrap">
                                                            <div class="product-action">
                                                                <a href="{{ route('add-to-wishlist',['id' => $product->id]) }}"
                                                                   class="add-to-wishlist">
                                                                    <span class="product-icon"><i
                                                                            class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                    <span class="tooltip-text">wishlist</span>
                                                                </a>
                                                                <a href="javascript:void(0)" class="add-to-cart"
                                                                   data-id="{{ $product->id }}">
                                                                            <span class="product-icon">
                                                                                <span
                                                                                    class="product-bag-icon icon-16"><i
                                                                                        class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-loader-icon icon-16"><i
                                                                                        class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span
                                                                                    class="product-check-icon icon-16"><i
                                                                                        class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                    <span class="tooltip-text">add to cart</span>
                                                                </a>
                                                                <form action="" method="POST">
                                                                    <a href="#quickview-modal"
                                                                       data-bs-toggle="modal"
                                                                       class="quick-view"
                                                                       data-id="{{ $product->id }}"
                                                                       data-name="{{ $product->name }}"
                                                                       data-price="{{ $product->selling_price }}"
                                                                       data-category="{{ $product->category->name }}"
                                                                       data-stock="{{ $product->stock ?? 0 }}"
                                                                       data-description="{{ Str::limit(strip_tags($product->short_description), 150) }}"
                                                                       data-image-main="{{ asset($product->image) }}"
                                                                       @foreach($product->otherImage as $key => $otherImage)
                                                                       data-image{{ $key+1 }}="{{ asset($otherImage->image) }}"
                                                                        @endforeach>
                                                                        <span class="product-icon"><i
                                                                                class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                        <span class="tooltip-text">quickview</span>
                                                                    </a>
                                                                </form>
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
                                <button type="button" class="swiper-prev swiper-prev-cart" aria-label="Arrow previous">
                                    <i class="ri-arrow-left-line d-block lh-1"></i></button>
                                <button type="button" class="swiper-next swiper-next-cart" aria-label="Arrow next"><i
                                    class="ri-arrow-right-line d-block lh-1"></i></button>
                            </div>
                        </div>
                        <div class="swiper-dots">
                            <div class="swiper-pagination swiper-pagination-cart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart-collection end -->
    </main>
</div>
