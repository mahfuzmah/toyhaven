<!-- header start -->
<div class="container">
    <header id="header" class="main-header">
        <!-- header-top start -->
        <div class="header-top-area">
            <!-- notification-bar start -->
            <div class="notification-bar ptb-11 primary-bg">
                <div class="container-fluid d-none d-xl-block">
                    <div class="row">
                        <div class="col-xl-3">
                        <span class="d-inline-block extra-color">Order online : <a href="01304-004499"
                                                                                   class="d-inline-block extra-color">01304-004499</a></span>
                        </div>
                        <div class="col-xl-6 text-center">
                            <div class="d-flex flex-wrap">
                                <div class="width-16">
                                    <div class="swiper-buttons">
                                        <button type="button"
                                                class="swiper-prev swiper-prev-notification extra-color icon-16"
                                                aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="width-calc-32 plr-15 text-center">
                                    <div class="notification-slider swiper" id="notification-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="text-white">Complimentary Free Shipping for Our First 100
                                                    Customers
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-white">Fast delivery & hassle-free returns</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="width-16">
                                    <div class="swiper-buttons">
                                        <button type="button"
                                                class="swiper-next swiper-next-notification extra-color icon-16"
                                                aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 text-end">
                        <span class="d-inline-block extra-color">Email now : <a href="mailto:demo@demo.com"
                                                                                class="d-inline-block extra-color">toyhavenbd@gmail.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="notification-marquee d-flex d-xl-none overflow-hidden">
                    <div class="notification-marquee-row d-flex">
                        <div class="extra-color per-15 text-nowrap">Order online : <a href="01304-004499"
                                                                                      class="d-inline-block extra-color">01304-004499</a>
                        </div>
                        <div class="extra-color per-15 text-nowrap">Complimentary Free Shipping for Our First 10 Customers
                        </div>
                        <div class="extra-color per-15 text-nowrap">Fast delivery & hassle-free returns</div>
                        <div class="extra-color per-15 text-nowrap">Email now : <a href="toyhavenbd@gmail.com"
                                                                                   class="d-inline-block extra-color">toyhavenbd@gmail.com</a>
                        </div>
                    </div>
                    <div class="notification-marquee-row d-flex">
                        <div class="extra-color per-15 text-nowrap">Order online : <a href="01304-004499"
                                                                                      class="d-inline-block extra-color">01304-004499</a>
                        </div>
                        <div class="extra-color per-15 text-nowrap">Complimentary Free Shipping for Our First 10 Customers
                        </div>
                        <div class="extra-color per-15 text-nowrap">Fast delivery & hassle-free returns</div>
                        <div class="extra-color per-15 text-nowrap">Email now : <a href="toyhavenbd@gmail.com"
                                                                                   class="d-inline-block extra-color">toyhavenbd@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- notification-bar end -->
            <!-- header-top-first start -->
            <div class="header-top-first ptb-10 position-relative body-bg">
                <div class="container-fluid">
                    <div class="row align-items-center header-area">
                        <!-- header-logo start -->
                        <div class="col-6 col-xl-2 header-element header-logo">
                            <div class="header-theme-logo">
                                <a href="{{route('home')}}" class="d-inline-block theme-logo">
                                    <img src="{{asset('/')}}website/assets/image/index/Untitled-1-01.png"
                                         class="width-120 width-xl-112 img-fluid" alt="logo" style="height: 47px; width: 166px;">
                                </a>
                            </div>
                        </div>
                        <!-- header-logo end -->
                        <!-- header-menu start -->
                        <div class="col-xl-6 col-xxl-5 d-none d-xl-block header-element header-menu">
                            <div class="mainmenu-content">
                                <div class="main-wrap">
                                    <ul class="menu-ul d-flex flex-wrap">
                                        <li class="menu-li">
                                            <a href="{{route('home')}}"
                                               class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                <span class="menu-title text-uppercase heading-weight">Home</span>
                                                <span class="icon-16 fw-normal"></span>
                                            </a>

                                        </li>
                                        <li class="menu-li">
                                            <a href="#" class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                <span class="menu-title text-uppercase heading-weight">CATEGORY</span>
                                                <span class="icon-16 fw-normal"><i
                                                        class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                            </a>
                                            <div
                                                class="menu-dropdown menu-sub collapse position-absolute top-auto body-bg z-2 DropDownSlide box-shadow">
                                                <ul class="menudrop-ul ptb-25">
                                                    @foreach($categories as $category)
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30">
                                                                <a href="{{route('category', ['id' => $category->id])}}"
                                                                   class="d-flex flex-wrap align-items-center">
                                                                <span
                                                                    class="menusub-title width-calc-16">{{$category->name}}</span>
                                                                    <span class="width-16 icon-16 fw-normal"></span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-li">
                                            <a href="{{route('category', ['id' => $category->id])}}"
                                               class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                <span class="menu-title text-uppercase heading-weight">Shop</span>
                                                <span class="icon-16 fw-normal"><i
                                                        class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                            </a>
                                            <div class="menu-dropdown menu-mega collapse position-absolute top-auto start-0 end-0 body-bg z-2 DropDownSlide box-shadow">
                                                <div class="container ptb-25">
                                                    <div class="menu-overview">
                                                    <div class="row">
                                                        @foreach($categories as $category)
                                                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                                                <div class="ptb-5 heading-weight">
                                                                    <a style="color: black; font-weight: bold; font-size: 15px;"
                                                                       href="{{route('category', ['id' => $category->id])}}">{{$category->name}}</a>
                                                                </div>
                                                                @foreach($category->subCategory as $subCategory)
                                                                    <span class="d-block ptb-2">
                                                                        <a href="{{route('subCategory', ['id' => $subCategory->id])}}"
                                                                           class="hover-text d-inline-block color"
                                                                           style="font-size: 14px;">{{$subCategory->name}}</a>
                                                                    </span>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="menu-li">
                                            <a href="javascript:void(0)"
                                                class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                <span class="menu-title text-uppercase heading-weight">BY AGE</span>
                                                <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                            </a>
                                            <div
                                                class="menu-dropdown menu-sub collapse position-absolute top-auto body-bg z-2 DropDownSlide box-shadow">
                                                <ul class="menudrop-ul ptb-25">
                                                    <li class="menusub-li">
                                                         <span class="d-block ptb-5 plr-30"><a
                                                         href="{{ route('product.age',['age'=>1]) }}"
                                                         class="d-inline-block body-primary-color">0-12 Months</a></span>
                                                    </li>
                                                    <li class="menusub-li">
                                                         <span class="d-block ptb-5 plr-30"><a
                                                                 href="{{ route('product.age',['age'=>2]) }}"
                                                                 class="d-inline-block body-primary-color">1-3 Years</a></span>
                                                    </li>
                                                    <li class="menusub-li">
                                                         <span class="d-block ptb-5 plr-30"><a
                                                                 href="{{ route('product.age',['age'=>3]) }}"
                                                                 class="d-inline-block body-primary-color">3-6 Years</a></span>
                                                    </li>
                                                    <li class="menusub-li">
                                                         <span class="d-block ptb-5 plr-30"><a
                                                                 href="{{ route('product.age',['age'=>4]) }}"
                                                                 class="d-inline-block body-primary-color">6-12 Years</a></span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"
                                               class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                <span class="menu-title text-uppercase heading-weight">Little Angel</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-menu end -->
                        <!-- header-icon start -->
                        <div class="col-6 col-xl-4 col-xxl-5 header-element header-icon">
                            <div class="header-icon-block d-flex justify-content-end">
                                <!-- header-search start -->
                                <div class="header-search w-100 d-none d-xxl-block per-15">
                                    <div class="header-theme-search w-100">
                                        <form method="get" action="javascript:void(0)" class="search-form w-100">
                                            <div class="search-bar position-relative">
                                                <div class="form-search d-flex">
                                                    <input type="search" name="search-input" id="headerSearchDesktop" class="w-100 search-input search-input-handler"
                                                           value="" placeholder="Search product..." required/>
                                                </div>
                                                <div id="desktopSearchResults"
                                                     class="search-results position-absolute top-auto start-0 end-0 body-bg z-2 border-full border-radius box-shadow"
                                                     style="max-height: 400px; overflow-y: auto; display: none;"> </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- header-search end -->
                                <ul class="ul-mt15 flex-nowrap align-items-center header-icon-element">
                                    <li class="header-icon-wrap toggler-wrap d-xl-none">
                                        <div class="header-icon-wrapper">
                                            <a href="javascript:void(0)" class="d-block header-icon-toggler toggler-btn"
                                               aria-label="Menu toggler button">
                                            <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i
                                                    class="ri-menu-line"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="header-icon-wrap search-wrap d-xxl-none">
                                        <div class="header-icon-wrapper">
                                            <a href="#searchmodal" class="d-block header-icon-search" data-bs-toggle="modal"
                                               aria-label="Search modal">
                                            <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i
                                                    class="ri-search-line"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="header-icon-wrap user-wrap d-md-block d-none">
                                    <li class="header-icon-wrap user-wrap d-md-block d-none">
                                        @if(Session::get('customer_id'))
                                            <div class="header-icon-wrapper">
                                                <a href="{{route('customer.dashboard')}}" class="d-block header-icon-user"
                                                   aria-label="Login user">
                                                <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i
                                                        class="ri-user-line"></i></span>
                                                </a>
                                            </div>
                                        @else
                                            <a href="{{route('customer.login')}}" class="d-block header-icon-user"
                                               aria-label="Login user">
                                            <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i
                                                    class="ri-user-line"></i></span>
                                        @endif
                                    </li>
                                    <li class="header-icon-wrap wishlist-wrap d-md-block d-none">
                                        <div class="header-icon-wrapper">
                                            <a href="{{route('customer.wishlist')}}" class="d-block header-icon-wishlist">
                                                    <span class="primary-link ul-mt5 flex-nowrap align-items-center">
                                                        <span class="d-block">
                                                            <span class="d-block header-block-icon-wrap position-relative per-8">
                                                                <span class="d-block header-block-icon font-16 font-xl-20">
                                                                    <i class="ri-heart-line"></i>
                                                                </span>
                                                               <span class="header-block-counter wishlist-counter extra-color font-10 position-absolute end-0 d-flex align-items-center justify-content-center primary-bg rounded-circle">{{ $totalWishlist }}</span>
                                                            </span>
                                                        </span>
                                                        <span class="d-none d-xl-block header-text-content text-uppercase text-nowrap heading-weight">Wishlist</span>
                                                    </span>
                                            </a>
                                        </div>
                                    </li>
                                    @livewire('header-cart')
                                    <!-- Update Cart Counter Script -->
                                    <script>
                                        function updateCartCounter(newCount) {
                                            var $counter = $('.cart-counter');

                                            $counter.fadeOut(150, function() {
                                                $counter.text(newCount);
                                                $counter.fadeIn(150);
                                            });
                                        }
                                    </script>
                                </ul>
                            </div>
                        </div>
                        <!-- header-icon end -->
                    </div>
                </div>
            </div>
            <!-- header-top-first end -->
        </div>
        <!-- header-top end -->
    </header>
</div>
<!-- header end -->
