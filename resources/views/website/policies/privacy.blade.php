@extends('website.master')
@section('body')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="assets/image/other/breadcrumb-bgimg.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> / Privacy policy</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Privacy policy</h2>
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
                        <h2 class="section-heading">Privacy policy</h2>
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
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">Welcome to
                                toyhavenbd.com. Your privacy is
                                our priority, and we are committed to safeguarding any personal information you provide.
                                Please read this Privacy Policy for detailed information on how we collect, use, and
                                protect your data.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Information
                                Collection</h6>
                            <p class="mst-6" data-animate="animate__fadeIn">Our e-commerce website or app may collect
                                necessary information when you place an order, including:</p>
                            <p class="p-bullets mst-16" data-animate="animate__fadeIn">Name</p>
                            <p class="p-bullets mst-1" data-animate="animate__fadeIn">Address</p>
                            <p class="p-bullets mst-1" data-animate="animate__fadeIn">Phone number</p>
                            <p class="p-bullets mst-1" data-animate="animate__fadeIn">Email address</p>
                            <p class="p-bullets mst-1" data-animate="animate__fadeIn">Payment details</p>
                            <p class="p-bullets mst-1" data-animate="animate__fadeIn">Delivery address (if
                                different)</p>
                            <p class="p-bullets mst-1" data-animate="animate__fadeIn">Other relevant personal
                                information</p>
                            <p class="p-number mst-18" data-animate="animate__fadeIn" style="text-align: justify;">
                                Additionally, when you browse our
                                website, we automatically collect your computer’s IP address to enhance your browsing
                                experience. With your consent, we may send you emails about store updates, new products,
                                and promotional offers.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Information
                                Security</h6>
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">We implement
                                strict security measures to
                                protect your personal data from unauthorized access, alteration, or misuse. All credit
                                card information is encrypted using Secure Socket Layer (SSL) technology. While no
                                method of transmission over the internet is 100% secure, we comply with PCI-DSS
                                standards and follow best industry practices.</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Data Access and
                                Withdrawal Rights</h6>
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">You have the
                                right to access, correct, amend, or delete any personal information we hold. If you wish
                                to withdraw your consent for us to contact you, please email us at
                                toyhavenbd@gmail.com</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Data Access and
                                Withdrawal Rights</h6>
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">You have the
                                right to access, correct, amend, or delete any personal information we hold. If you wish
                                to withdraw your consent for us to contact you, please email us at
                                toyhavenbd@gmail.com</p>
                            <br>
                            <h6 class="number-sub-index font-18" data-animate="animate__fadeIn">Third-Party Links</h6>
                            <p class="mst-18" data-animate="animate__fadeIn" style="text-align: justify;">Our website
                                may include links to third-party services. We are not responsible for third-party
                                content, transactions, or policies.</p>

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
