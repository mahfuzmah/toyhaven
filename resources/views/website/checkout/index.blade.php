@extends('website.master')

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">checkout</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="{{route('products.all')}}">Shop</a></li>
                        <li>checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- main start -->
    <main id="main">
        <!-- checkout start -->
        <form id="checkoutForm" action="{{route('checkout.new-order')}}" method="POST">
            @csrf



            @if ($errors->any())
                <div class="container">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if(session('message'))
                <div class="container">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="container">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif


            <section class="checkout-area section-ptb">
                <div class="container">
                    <div class="row">
                        <!-- ✅ Left: Order Summary -->
                        <div class="col-12 col-lg-5 col-xl-4 p-lg-sticky top-0" data-animate="animate__fadeIn">
                            @php($sum = 0)
                            <div class="checkout-summary border p-4">
                                <div class="checkout-orderview">
                                    <h6 class="font-18 meb-25">
                                        Shopping cart
                                        <span class="checkcart-count">{{ $total_qty }}</span>
                                    </h6>

                                    <div class="row row-mtm15">
                                        @foreach(Cart::content() as $item)
                                            <div class="checkitem-content">
                                                <div class="ul-mt15">
                                                    <div class="checkitem-img width-88">
                                                        <div class="position-relative">
                                                            <img src="{{ asset($item->options->image) }}" class="w-100 img-fluid border-radius" alt="cart-1">
                                                            <span class="checkitem-qty extra-color font-11 position-absolute d-flex align-items-center justify-content-center secondary-bg rounded-circle lh-1">{{ $item->qty }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="checkitem-info width-calc-88">
                                                        <div class="checkitem-detail h-100 d-flex flex-column justify-content-between">
                                                            <div class="checkitem-text">
                                                                <a href="{{ route('product', ['id' => $item->id]) }}" class="primary-link heading-weight">
                                                                    {{ $item->name }}
                                                                </a>
                                                            </div>
                                                            <div class="checkitem-price mst-12 text-end">
                                                                <div class="heading-color heading-weight">
                                                                    ৳{{ number_format($item->price * $item->qty, 2) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php($sum += $item->price * $item->qty)
                                        @endforeach
                                    </div>
                                </div>
                                <div class="checkout-costview">
                                    <div class="checkout-cost mst-30 pst-30 bst">
                                        <h6 class="font-18 meb-21">Cost summary</h6>
                                        <div class="row row-mtm20">
                                            <div class="col-12 d-flex justify-content-between">
                                                <span>Subtotal</span>
                                                <span id="totalValue" class="heading-color heading-weight">{{$sum}}</span>
                                            </div>

                                            <div class="col-12 d-flex justify-content-between">
                                                <span>Tax</span>
                                                <span id="taxValue" class="text-success heading-weight"> {{$tax = round( ($sum * 0) ) }}</span>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between">
                                                <span>Shipping</span>
                                                <div class="custom-option">
                                                    <style>#shippingCost {
                                                            color: green;
                                                        }</style>
                                                    <span class="text-success heading-weight">
                                                            <select id="shippingCost">
                                                                <option value="60"> Inside Dhaka (TK 60)</option>
                                                                <option value="130">Outside Dhaka (TK 130)</option>
                                                            </select>
                                                        </span>
                                                </div>
                                                <span id="shippingCostResult">{{ $shipping = 60 }}</span>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between">
                                                <span>Total</span>
                                                <span class="heading-color heading-weight">Tk.  <span
                                                        id="totalRes">{{$sum + $tax + $shipping}}</span> </span>

                                                <input type="hidden" name="order_total" id="orderTotal"/>
                                                <input type="hidden" name="tax_total" id="taxTotal"/>
                                                <input type="hidden" name="shipping_total" id="shippingTotal"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ✅ Right: Billing & Payment -->
                        <div class="col-12 col-lg-7 col-xl-8">
                            <div class="checkout-billview">
                                <div class="row row-mtm align-items-xl-start">

                                    <!-- ✅ Shipping Address -->
                                    <div class="col-12 col-xl-6">
                                        <div class="ptb-30 plr-15 plr-md-30 body-bg border-full border-radius" data-animate="animate__fadeIn">
                                            <div class="checkout-info">
                                                <div class="acc-info">
                                                    <div class="acc-title d-flex align-items-center justify-content-between">
                                                        <h6 class="font-18">Shipping address</h6>
                                                    </div>

                                                    <div class="acc-detail mst-21">
                                                        <div class="acc-detail-field">
                                                            <div class="row field-row">
                                                                <div class="col-12 col-md-6 col-xl-12 field-col">
                                                                    @if(isset($customer->name))
                                                                        <label for="name" class="field-label">{{$customer->name}}</label>
                                                                    @else
                                                                        <input type="text" id="name" name="name" class="w-100 form-control" placeholder="name" required>
                                                                    @endif
                                                                </div>
                                                                <div class="col-12 col-md-6 col-xl-12 field-col">
                                                                    @if(isset($customer->email))
                                                                        <label for="email" class="field-label">{{$customer->email}}</label>
                                                                    @else
                                                                        <input type="email" id="email" name="email" class="w-100 form-control" placeholder="email" required>
                                                                    @endif
                                                                </div>
                                                                <div class="col-12 col-md-6 col-xl-12 field-col">
                                                                    @if(isset($customer->mobile))
                                                                        <label for="phone" class="field-label">{{$customer->mobile}}</label>
                                                                    @else
                                                                        <input type="text" id="phone" name="mobile" class="w-100 form-control" placeholder="mobile number" required>
                                                                    @endif
                                                                </div>
                                                                <!-- City Selection -->

                                                                <div class="col-12 col-md-6 col-xl-12 field-col">
                                                                    <label for="address" class="field-label">Address</label>
                                                                    <input type="text" id="address" name="delivery_address" class="w-100 form-control" autocomplete="address-line1" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ✅ Payment Method -->
                                    <div class="col-12 col-xl-6">
                                        <div class="checkout-other-info ptb-30 plr-15 plr-md-30 body-bg border-full border-radius" data-animate="animate__fadeIn">
                                            <div class="acc-title d-flex align-items-center justify-content-between">
                                                <h6 class="font-18">Payment Method</h6>
                                            </div>
                                            <div class="acc-detail mst-21">
                                                <div class="check-method">
                                                    <span class="d-block meb-16">Choose payment method:</span>
                                                    <div class="row row-mtm15">
                                                        <div class="check-method-option">
                                                            <div class="check-method-content d-flex align-items-center justify-content-between ptb-15 plr-15 extra-bg border-radius">
                                                                <div class="check-method-radio">
                                                                    <label class="cust-radio-label">
                                                                        <input type="radio" name="payment_method" value="cash" checked>
                                                                        <span class="d-block cust-check"></span>
                                                                        <span>Cash On Delivery</span>
                                                                    </label>
                                                                </div>
                                                                <div class="check-method-img ul-mt5 text-danger">
                                                                    <img src="{{asset('/')}}website/assets/image/index/cash-on-delivery_5110164.png" class="width-40 img-fluid" alt="cash-on-delivery">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="check-method-option">
                                                            <div class="check-method-content d-flex align-items-center justify-content-between ptb-15 plr-15 extra-bg border-radius">
                                                                <div class="check-method-radio">
                                                                    <label class="cust-radio-label">
                                                                        <input type="radio" name="payment_method" value="online" >
                                                                        <span class="d-block cust-check"></span>
                                                                        <span>Online Pay</span>
                                                                    </label>
                                                                </div>
                                                                <div class="check-method-img ul-mt5 text-danger">
                                                                    <img src="{{asset('/')}}website/assets/image/index/credit-card_14624247.png" class="width-40 img-fluid" alt="credit-card">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mst-20">
                                                    <label class="cust-radio-label">
                                                        <input type="checkbox" id="terms_agreement" class="border border-solid 1px">
                                                        <span class="d-block cust-check" style="border-radius: 50% !important; border: 1px solid black !important; width: 20px; height: 20px; background-color: white !important;"></span>
                                                        <span>I agree to the <a href="{{route('condition')}}" class="text-primary">Terms & Conditions</a>, <a href="{{route('privacy')}}" class="text-primary">Privacy Policy</a>, <a href="{{route('shipping')}}" class="text-primary">Shipping Policy</a> and <a href="{{route('refund')}}" class="text-primary">Return Refund Policy</a></span>
                                                    </label>
                                                    <p id="agreementError" class="text-danger mt-2" style="display: none;">
                                                        <i class="lni lni-warning"></i> Please check the box to agree to the policies before placing your order.
                                                    </p>
                                                </div>

                                                <div class="acc-detail-button mst-20 mst-md-30">
                                                    <div class="row btn-row">
                                                        <div class="col-12">
                                                            <button type="submit" class="w-100 acc-save btn-style secondary-btn" id="placeOrderBtn">
                                                                PLACE ORDER
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- row -->
                            </div> <!-- checkout-billview -->
                        </div> <!-- col-right -->
                    </div> <!-- row -->
                </div> <!-- container -->


                <!-- pickup-availability-modal start -->
                <div class="pickup-availability-modal modal fade" id="pickup-availability-modal" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content body-bg border-0 br-hidden">
                            <div class="modal-body ptb-30 plr-15 plr-md-30">
                                <div class="pickup-availability-modal-header d-flex align-items-center justify-content-between meb-30">
                                    <h6 class="font-18">Store details</h6>
                                    <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                </div>
                                <div class="pickup-availability-modal-content">
                                    <div class="row row-mtm15">
                                        <div class="col-12 col-md-6">
                                            <div class="ul-mt15 pickup-availability-modal-info">
                                                <div class="pickup-availability-modal-img width-88">
                                                    <img src="assets/image/cart/cart-1.jpg" class="w-100 img-fluid border-radius" alt="cart-1">
                                                </div>
                                                <div class="pickup-availability-modal-text width-calc-88">
                                                    <span class="d-block">Pleated skater skirt</span>
                                                    <span class="d-block mst-7">XS / Aliceblue</span>
                                                    <span class="d-block mst-7">Polyester</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="ul-mt15 pickup-availability-modal-info">
                                                <div class="pickup-availability-modal-img width-88">
                                                    <img src="assets/image/cart/cart-2.jpg" class="w-100 img-fluid border-radius" alt="cart-2">
                                                </div>
                                                <div class="pickup-availability-modal-text width-calc-88">
                                                    <span class="d-block">Tailored blazer jacket</span>
                                                    <span class="d-block mst-7">38 / Azure</span>
                                                    <span class="d-block mst-7">Wool blend</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="ul-mt15 pickup-availability-modal-info">
                                                <div class="pickup-availability-modal-img width-88">
                                                    <img src="assets/image/cart/cart-3.jpg" class="w-100 img-fluid border-radius" alt="cart-3">
                                                </div>
                                                <div class="pickup-availability-modal-text width-calc-88">
                                                    <span class="d-block">Girls floral ruffle top</span>
                                                    <span class="d-block mst-7">2Y / Aliceblue</span>
                                                    <span class="d-block mst-7">Cotton</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="ul-mt15 pickup-availability-modal-info">
                                                <div class="pickup-availability-modal-img width-88">
                                                    <img src="assets/image/cart/cart-4.jpg" class="w-100 img-fluid border-radius" alt="cart-4">
                                                </div>
                                                <div class="pickup-availability-modal-text width-calc-88">
                                                    <span class="d-block">Classic cotton t-shirt</span>
                                                    <span class="d-block mst-7">S / Azure</span>
                                                    <span class="d-block mst-7">Cotton</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pickup-availability-warehouse mst-30 pst-30 bst">
                                        <div class="row row-mtm">
                                            <div class="col-12 col-md-6">
                                                <div class="pickup-warehouse-detail d-flex flex-column align-items-start">
                                                    <span class="d-inline-block st-small-label bg-dark meb-11">Warehouse</span>
                                                    <div class="ul-mtm-15">
                                                        <span>603, Upper ground</span>
                                                        <span>Textile hub-a</span>
                                                        <span>Kumbharia gam</span>
                                                        <span>Surat</span>
                                                        <span>Gujarat 395010</span>
                                                        <span>India</span>
                                                    </div>
                                                    <div class="pickup-warehouse-location mst-12">
                                                        <a href="https://www.google.com/maps/place/Amazon+Warehouse+Surat/@21.1865297,72.89381,17z/data=!3m1!4b1!4m16!1m9!4m8!1m0!1m6!1m2!1s0x3be04ff9cd701dd5:0x97c4510627e193c0!2sNear,+603,Upper+Ground+Sangini+Textile+Hub-A,+Kumbharia+Gam,+Surat,+Gujarat+395010!2m2!1d72.8963849!2d21.1865247!3m5!1s0x3be04ff9cd701dd5:0x97c4510627e193c0!8m2!3d21.1865247!4d72.8963849!16s%2Fg%2F11j7dbvx1f?entry=ttu" target="_blank"><i class="ri-map-pin-range-line icon-16 mer-4"></i><span class="heading-weight">Show on google map</span></a>
                                                    </div>
                                                    <div class="pickup-warehouse-available body-bg ptb-15 plr-15 mst-20 br-hidden">
                                                        <span class="d-block primary-color">Pickup available, usually ready in 24 hours.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="pickup-warehouse-detail d-flex flex-column align-items-start">
                                                    <span class="d-inline-block st-small-label bg-dark meb-11">Office</span>
                                                    <div class="ul-mtm-15">
                                                        <span>603, Lower ground</span>
                                                        <span>Textile hub-a</span>
                                                        <span>Parvat patiya</span>
                                                        <span>Surat</span>
                                                        <span>Gujarat 395010</span>
                                                        <span>India</span>
                                                    </div>
                                                    <div class="pickup-warehouse-location mst-12">
                                                        <a href="https://www.google.com/maps/place/Flipkart+office/@21.2012,72.8584772,14z/data=!4m6!3m5!1s0x3be04f27a169a48f:0xe96601a01f37955e!8m2!3d21.1945842!4d72.869188!16s%2Fg%2F11l27rf17v?entry=ttu" target="_blank"><i class="ri-map-pin-range-line icon-16 mer-4"></i><span class="heading-weight">Show on google map</span></a>
                                                    </div>
                                                    <div class="pickup-warehouse-available body-bg ptb-15 plr-15 mst-20 br-hidden">
                                                        <span class="d-block primary-color">Pickup available, usually ready in 24 hours.</span>
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
                <!-- pickup-availability-modal end -->
            </section>
        </form>
        <!-- checkout end -->
    </main>
    <!-- main end -->


@endsection
