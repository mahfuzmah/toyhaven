@extends('website.master')
@section('body')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Shipping policy</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Shipping policy</h2>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- main start -->
    <main id="main">
        <!-- privacy-policy start -->
        <section class="privacy-policy section-ptb">
            <div class="container">
                <div class="section-capture text-center">
                    <div class="section-title" data-animate="animate__fadeIn">
                        <h2 class="section-heading">Shipping policy</h2>
                    </div>
                </div>
                <div class="row row-mtm align-items-md-start">
                    <div class="col-12 col-md-4 col-lg-3 p-md-sticky top-0">
                        <div class="per-xxl-10">
                            <div class="row row-mtm">
                                <div class="col-12">
                                    <h6 class="other-tab-title font-20 meb-18" data-animate="animate__fadeIn"><span>Ask us anything</span>
                                    </h6>
                                    <div class="ul-mtm-15">
                                        <span data-animate="animate__fadeIn"><i class="ri-phone-line icon-16 mer-4"></i><a href="+88 01304-004499" class="body-primary-color">+88 01304-004499</a></span>
                                        <span data-animate="animate__fadeIn"><i class="ri-mail-line icon-16 mer-4"></i><a href="toyhavenbd@gmail.com" class="body-primary-color">toyhavenbd@gmail.com</a></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="other-tab-title font-20 meb-18" data-animate="animate__fadeIn"><span>Policies</span>
                                    </h6>
                                    <div class="ul-mtm-15">
                                        <span data-animate="animate__fadeIn"><a href="{{route('cookie')}}" class="primary-color">Cookie page</a></span>
                                        <span data-animate="animate__fadeIn"><a href="{{route('payment')}}" class="body-primary-color">Payment policy</a></span>
                                        <span data-animate="animate__fadeIn"><a href="{{route('privacy')}}" class="body-primary-color">Privacy policy</a></span>
                                        <span data-animate="animate__fadeIn"><a href="{{route('refund')}}" class="body-primary-color">Return policy</a></span>
                                        <span data-animate="animate__fadeIn"><a href="{{route('shipping')}}" class="body-primary-color">Shipping policy</a></span>
                                        <span data-animate="animate__fadeIn"><a href="{{route('condition')}}" class="body-primary-color">Terms & conditions</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9 p-md-sticky top-0">
                        <div class="number-index">
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">Thank you for
                                shopping with Toy Haven BD! Please review our shipping policy to understand how we
                                deliver your orders safely and on time.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Delivery Areas</h6>
                            <p class="mst-6" data-animate="animate__fadeIn">We deliver across all major cities and
                                including of all remote areas of districts in Bangladesh, including Dhaka, Chattogram,
                                Khulna, Rajshahi, Sylhet, and others.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Delivery Time</h6>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                • Inside Dhaka: 1–3 business days
                            </p>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                • Outside Dhaka: 3–5 business days
                            </p>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                • Delivery time may vary slightly due to courier delays, weather, or public holidays.
                            </p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Shipping Charges</h6>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                • Inside Dhaka: ৳60–৳80 (depending on weight and courier)
                            </p>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                • Outside Dhaka: ৳100–৳150
                            </p>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                • Free shipping may apply on promotional campaigns or orders above a certain amount (as
                                displayed on our website).
                            </p>
                            <br>

                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Order Tracking</h6>
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">Once your
                                order is shipped, we’ll send you a tracking number via SMS or email so you can track
                                your parcel in real time through our delivery partner’s website.
                            </p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Delivery Attempts</h6>
                            <p class="mst-6" data-animate="animate__fadeIn">Our courier will make up to two attempts to
                                deliver your order. If you are unavailable or unreachable, the parcel may be returned to
                                us. You can contact us to reschedule delivery.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Damaged or Lost
                                Packages</h6>
                            <p class="mst-6" data-animate="animate__fadeIn">If your package arrives damaged or does not
                                arrive at all, please contact us immediately within 48 hours of delivery (or expected
                                delivery date). We will investigate and offer a replacement or refund as
                                appropriate.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">International Shipping</h6>
                            <p class="mst-6" data-animate="animate__fadeIn">Currently, Toy Haven BD ships only within Bangladesh.</p>

                            <a href="#" class="btn-style secondary-btn mst-23"
                               data-animate="animate__fadeIn">Know to more info</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- privacy-policy end -->
    </main>
    <!-- main end -->

@endsection
