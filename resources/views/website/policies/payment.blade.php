@extends('website.master')
@section('body')

    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Payment policy</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Payment policy</h2>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- main start -->
    <main id="main">
        <!-- payment-policy start -->
        <section class="payment-policy section-ptb">
            <div class="container">
                <div class="section-capture text-center">
                    <div class="section-title" data-animate="animate__fadeIn">
                        <h2 class="section-heading">Payment terms</h2>
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
                        <div class="question-index">
                            <h6 class="font-18" data-animate="animate__fadeIn">Secure transaction rules and payment
                                process</h6>
                            <p class="mst-18" data-animate="animate__fadeIn">Discover the steps to ensure safe and
                                seamless payments on our platform. Learn about payment methods, security measures, and
                                how to protect your financial data.</p>
                            <p class="p-bullets mst-16">Ensure easy and secure transactions.</p>
                            <p class="p-bullets mst-1">Follow steps for seamless payments.</p>
                            <p class="p-bullets mst-1">Protect your payment information now.</p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Accepted Payment Methods</h6>
                            <p class="p-bullets mst-18 animate__fadeIn animate__animated"
                               data-animate="animate__fadeIn"><span class="heading-color heading-weight mer-4">Cash on Delivery (COD):</span>Pay
                                in cash when your order is delivered.</p>
                            <p class="p-bullets mst-1 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                <span class="heading-color heading-weight mer-4">Mobile Banking:</span>bKash, Nagad, and
                                Rocket.</p>
                            <p class="p-bullets mst-1 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                <span class="heading-color heading-weight mer-4">Debit/Credit Card Payments:</span>Visa,
                                MasterCard, American Express (processed securely via our payment gateway).</p>
                            <p class="p-bullets mst-1 animate__fadeIn animate__animated" data-animate="animate__fadeIn">
                                <span class="heading-color heading-weight mer-4">Bank Transfer:</span>Available upon
                                request (please contact our support team before payment).</p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Payment Security</h6>
                            <p class="p-bullets mst-18">Your payment information is processed through secure and
                                encrypted channels.
                                We do not store your card or mobile banking details on our servers. All online payments
                                are handled by verified and PCI DSS–compliant payment gateways to ensure your safety.
                            </p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Order Confirmation </h6>
                            <p class="p-bullets mst-18">Once payment is completed successfully, you will receive an
                                order confirmation via email or SMS. For Cash on Delivery orders, confirmation will be
                                sent after you place the order on our website.</p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Pricing and Currency</h6>
                            <p class="p-bullets mst-18">All prices listed on toyhavenbd.com are in Bangladeshi Taka
                                (BDT) and are inclusive of applicable VAT or taxes, unless stated otherwise. Shipping
                                charges (if applicable) will be added during checkout before final payment.</p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Failed or Declined
                                Transactions</h6>
                            <p class="p-bullets mst-18">If your payment fails due to network or gateway issues, please
                                try again or contact your payment provider. If funds are deducted but the order is not
                                confirmed, please email us at toyhavenbd@gmail.com or call+8801304-004499, and we will
                                verify and resolve the issue.</p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Refunds and Cancellations</h6>
                            <p class="p-bullets mst-18">Refunds are processed according to our Refund & Return Policy.
                                In case of cancellation before shipment, a full refund will be issued (if prepayment was
                                made). Refunds are typically processed within 7–10 business days after confirmation.</p>
                            <h6 class="font-18 mst-18" data-animate="animate__fadeIn">Cash on Delivery (COD) Terms</h6>
                            <p class="p-bullets mst-18">COD is available for selected delivery locations in Bangladesh.
                                Customers must provide a valid phone number and address.
                                The delivery partner may contact you before delivering the parcel. Failure to respond
                                may result in cancellation.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- payment-policy end -->
    </main>

@endsection
