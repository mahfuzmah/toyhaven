<?php $__env->startSection('body'); ?>


    <main id="main">

        <!-- service-area start -->

        <!-- service-area end -->
        <!-- main-slider start -->
        <div class="modal fade" id="newslettermodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered newsletter-modal" role="document">

                <div class="modal-content border-0 shadow-lg" style="background-color: #f4f6f8; border-radius: 15px; overflow: hidden;">

                    <button type="button" class="close position-absolute p-3" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close" style="right: 0; z-index: 10; opacity: 0.6; background: transparent; border: none;">
                        <span aria-hidden="true" style="font-size: 30px;">&times;</span>
                    </button>

                    <div class="modal-body p-0">
                        <div class="row no-gutters justify-content-center">
                            <div class="col-12 text-center ptb-30 plr-15 plr-md-30 py-5">
                                <div class="newsletter-content d-flex flex-column align-items-center justify-content-center">

                                    <div class="mb-3">
                                        <div class="bg-white rounded-circle p-3 shadow-sm d-inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#dc3545" class="bi bi-truck" viewBox="0 0 16 16">
                                                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 12.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="text-secondary small text-uppercase font-weight-bold" style="letter-spacing: 2px;">Need it fast?</div>

                                    <div class="w-100 mt-3 mb-4">
                                        <h2 class="font-weight-bold text-dark mb-2" style="font-size: 32px; line-height: 1.2;">Same Day Delivery</h2>
                                        <p class="text-danger font-weight-bold mb-0" style="font-size: 16px; background: #ffebeb; display: inline-block; padding: 5px 15px; border-radius: 20px;">
                                            Order Before 12:00 PM
                                        </p>
                                    </div>

                                    <a href="collection.html" class="btn btn-dark btn-lg px-5 rounded-pill shadow-lg mb-4" style="transition: transform 0.2s;">
                                        Shop Now
                                    </a>

                                    <div class="checkbox-hide">
                                        <label class="d-inline-flex align-items-center cursor-pointer mb-0 p-2 rounded hover-bg">
                                            <input type="checkbox" id="popup-input" name="popup-input" class="mr-2 checkbox-hide-btn" style="width: 16px; height: 16px;">
                                            <span class="text-muted small">Don't show again</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <section class="slider-content position-relative">
                <div class="home-slider swiper" id="home-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-img d-flex flex-wrap text-center" data-bgimg="<?php echo e(asset('/')); ?>website/assets/image/index/slider-bgimg3.jpg">
                                <div class="col-12 col-lg-4 d-flex flex-column align-items-center justify-content-center section-ptb plr-15 plr-md-30 slider-content-info">
                                    <div class="slider-subtitle primary-color font-18 font-xl-20 meb-15 meb-sm-17 meb-xl-29 meb-xxl-33">Complimentary Shipping for Our First 100 Orders</div>
                                    <h2 class="font-32 font-sm-48 font-xl-72 font-xxl-80 text-uppercase"><span class="fw-bolder">Free </span>Shipping</h2>
                                    <a href="<?php echo e(route('products.all')); ?>" class="btn-style primary-btn mst-20 mst-sm-23 mst-xl-34 mst-xxl-38">Shop collection</a>
                                </div>
                                <div class="col-6 col-lg-4 order-lg-first">
                                    <span class="d-inline-block slider-content-img1"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/child-care-ymca-family-child-development-child-d8d3eeeac1c71f9c6b954d0f6f016f6c.png" class="w-100 img-fluid" alt="slider-1.1"></span>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <span class="d-inline-block slider-content-img2"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/favpng_8245b3e678264a33d79009fc032e0419.png" class="w-100 img-fluid" alt="slider-1.2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-buttons d-none">
                    <div class="swiper-buttons-wrap">
                        <button type="button" class="swiper-prev swiper-prev-homeslider icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                        <button type="button" class="swiper-next swiper-next-homeslider icon-16 width-40 height-40 position-absolute top-50 translate-middle-y z-1" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                    </div>
                </div>
                <div class="swiper-dots d-none position-absolute bottom-0 start-50 translate-middle-x z-1 meb-15 meb-md-30">
                    <div class="swiper-pagination swiper-pagination-homeslider d-flex flex-wrap"></div>
                </div>
            </section>


        <!-- main-slider end -->
        <!-- category-slider start -->
        <section class="category-slider section-ptb extra-bg">
            <div class="container-fluid">
                <div class="cat-category">
                    <div class="section-capture text-center">
                        <div class="section-title" data-animate="animate__fadeIn">
                            <h2 class="section-heading">Every best category</h2>
                        </div>
                    </div>
                    <div class="cat-wrap">
                        <div class="cat-slider swiper" id="cat-slider">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                        <div class="cat-block banner-hover w-100 ptb-15 plr-15 body-bg border-radius">
                                            <a href="<?php echo e(route('category', ['id' => $category->id])); ?>" class="d-none d-xl-block position-relative banner-img br-hidden">
                                                <span class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">Shop now</span>
                                                <img src="<?php echo e(asset($category->image)); ?>" class="w-100 img-fluid" alt="collection-1">
                                            </a>
                                            <a href="<?php echo e(route('category', ['id' => $category->id])); ?>" class="d-block d-xl-none banner-img br-hidden">
                                                <img src="<?php echo e(asset($category->image)); ?>" class="w-100 img-fluid" alt="collection-1">
                                            </a>
                                            <div class="cat-content pst-15">
                                                <div class="ul-mtm15 justify-content-between heading-weight">
                                                    <a
                                                        href="<?php echo e(route('category', ['id' => $category->id])); ?>"><span class="heading-color  text-truncate"><?php echo e($category->name); ?> </span></a>
                                                    <span class="primary-color text-uppercase"></span>
                                                </div>
                                                <div class="d-xl-none mst-7">
                                                    <a href="<?php echo e(route('category', ['id' => $category->id])); ?>" class="link-btn">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="swiper-buttons">
                            <div class="swiper-buttons-wrap">
                                <button type="button" class="swiper-prev swiper-prev-cat" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                <button type="button" class="swiper-next swiper-next-cat" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                            </div>
                        </div>
                        <div class="swiper-dots" data-animate="animate__fadeIn">
                            <div class="swiper-pagination swiper-pagination-cat"></div>
                        </div>
                        <div class="view-button d-none" data-animate="animate__fadeIn">
                            <a href="#" class="btn-style tertiary-btn">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- category-slider end -->

        <!-- scroll-text start -->
        <div class="scroll-text ptb-10 primary-bg overflow-hidden">
            <div class="d-flex">
                <div class="scroll-text-row scroll-text-left d-flex align-items-center">
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Smart play begins with our educational collection</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Develop thinking skills through fun learning play</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Discover the joy of learning through play</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Creative learning made fun with educational toys</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Where play meets knowledge — explore educational toys</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                </div>
                <div class="scroll-text-row scroll-text-left d-flex align-items-center">
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Unlock your child’s imagination with fun learning toys</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Learn, play, and grow with educational fun</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Build creativity through playtime learning adventures</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Spark young minds with our educational toy collection</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                    <span class="extra-color msl-15 text-nowrap" data-animate="animate__fadeIn">Smart toys for brighter, sharper little minds</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img1.png" class="w-100 img-fluid" alt="scroll-text-img1"></span>
                </div>
            </div>
        </div>


        <!-- scroll-text end -->

        <!-- scroll-text start -->
        <div class="scroll-text ptb-10 extra-bg overflow-hidden">
            <div class="d-flex">
                <div class="scroll-text-row scroll-text-right d-flex align-items-center">
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Unlock your child’s imagination with fun learning toys</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Smart toys for brighter, sharper little minds</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Learn, play, and grow with educational fun</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Build creativity through playtime learning adventures</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Spark young minds with our educational toy collection</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                </div>
                <div class="scroll-text-row scroll-text-right d-flex align-items-center">
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Make learning exciting with toys that teach</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Inspiring curiosity, one educational toy at a time</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Play smarter — discover our educational toy sets</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Educational fun for curious and creative kids</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                    <span class="heading-color msl-15 text-nowrap" data-animate="animate__fadeIn">Boost learning power with playful toy experiences</span>
                    <span class="width-24 msl-15" data-animate="animate__fadeIn"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/scroll-text-img2.png" class="w-100 img-fluid" alt="scroll-text-img2"></span>
                </div>
            </div>
        </div>
        <!-- scroll-text end -->

        <!-- New Arrival product start -->

            <section class="category-product section-ptb">
                <div class="container-fluid">
                    <div class="collection-category">
                        <div class="section-capture text-center">
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">New Arrival Products</h2>
                            </div>
                        </div>
                        <div class="row row-mtm100 gx-0">
                            <div class="col-12 ">
                                <div class="collection-wrap">
                                    <div class="collection-product-slider swiper" id="trend-product-slider">
                                        <div class="swiper-wrapper">
                                            <?php $__currentLoopData = $newArrivalProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product">
                                                        <div class="row single-product-wrap">
                                                            <div class="product-image-col">
                                                                <div class="product-image">
                                                                    <a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="pro-img">
                                                                            <img src="<?php echo e(asset($product->image)); ?>" class="w-100 img-fluid img1" alt="p-1">
                                                                    </a>
                                                                    <div class="product-action-wrap">
                                                                        <div class="product-action">
                                                                            <a href="<?php echo e(route('add-to-wishlist',['id' => $product->id])); ?>" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                                                                <span class="product-icon">
                                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line"></i></span>
                                                                                    <span class="product-loader-icon icon-16" style="display:none;"><i class="ri-loader-4-line"></i></span>
                                                                                    <span class="product-check-icon icon-16" style="display:none;"><i class="ri-check-line"></i></span>
                                                                                </span>
                                                                                <span class="tooltip-text">add to cart</span>
                                                                            </a>

                                                                            <!-- Success message -->
                                                                            <div id="cart-message" style="position: fixed; top: 20px; right: 20px; background: #28a745; color: white; padding: 10px 15px; border-radius: 5px; display: none; z-index: 9999;">
                                                                            </div>
                                                                            <a href="#quickview-modal"
                                                                               data-bs-toggle="modal"
                                                                               class="quick-view"
                                                                               data-id="<?php echo e($product->id); ?>"
                                                                               data-name="<?php echo e($product->name); ?>"
                                                                               data-price="<?php echo e($product->selling_price); ?>"
                                                                               data-category="<?php echo e($product->category->name); ?>"
                                                                               data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                               data-description="<?php echo e(Str::limit(strip_tags($product->short_description), 150)); ?>"
                                                                               data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                               <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                               data-image<?php echo e($key+1); ?>="<?php echo e(asset($otherImage->image)); ?>"
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                                                <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                            <a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="primary-link"><?php echo e($product->name); ?></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">TK. <?php echo e($product->selling_price); ?></span>
                                                                            <span class="old-price"><span class="mer-3"></span><span class="text-decoration-line-through"></span></span>
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
                                                                        <span class="review-average">4.0<span class="review-caption">2 reviews</span></span>
                                                                    </span>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                    </div>
                                                                    <div class="product-action-wrap">
                                                                        <div class="product-action">
                                                                            <a href="<?php echo e(route('add-to-wishlist',['id' => $product->id])); ?>" class="add-to-wishlist">
                                                                                <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                                <span class="tooltip-text">wishlist</span>
                                                                            </a>
                                                                            <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                                <span class="tooltip-text">add to cart</span>
                                                                            </a>
                                                                            <form action="" method="POST">
                                                                                <a href="#quickview-modal"
                                                                                   data-bs-toggle="modal"
                                                                                   class="quick-view"
                                                                                   data-id="<?php echo e($product->id); ?>"
                                                                                   data-name="<?php echo e($product->name); ?>"
                                                                                   data-price="<?php echo e($product->selling_price); ?>"
                                                                                   data-category="<?php echo e($product->category->name); ?>"
                                                                                   data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                                   data-description="<?php echo e(Str::limit(strip_tags($product->short_description), 150)); ?>"
                                                                                   data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                                   <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                   data-image<?php echo e($key+1); ?>="<?php echo e(asset($otherImage->image)); ?>"
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <div class="view-button " data-animate="animate__fadeIn">
                                        <a href="<?php echo e(route('products.all')); ?>" class="btn-style tertiary-btn">View all item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- category-product end -->


            <section class="category-product section-ptb">
                <div class="container-fluid">
                    <div class="collection-category">
                        <div class="section-capture text-center">
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Best Seller Products</h2>
                            </div>
                        </div>

                        <div class="row row-mtm100 gx-0">
                            <div class="col-12">
                                <div class="collection-wrap">
                                    <div class="collection-product-slider swiper" id="new-arrival-slider">
                                        <div class="swiper-wrapper">
                                            <?php $__currentLoopData = $bestSellerProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product">
                                                        <div class="row single-product-wrap">
                                                            <div class="product-image-col">
                                                                <div class="product-image">
                                                                    <div class="product-image">
                                                                        <a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="pro-img">
                                                                            <img src="<?php echo e(asset($product->image)); ?>" class="w-100 img-fluid img1" alt="p-1">
                                                                        </a>
                                                                        <div class="product-action-wrap">
                                                                            <div class="product-action">
                                                                                <a href="<?php echo e(route('add-to-wishlist',['id' => $product->id])); ?>" class="add-to-wishlist">
                                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                                    <span class="tooltip-text">wishlist</span>
                                                                                </a>
                                                                                <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                                                                    <span class="product-icon">
                                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line"></i></span>
                                                                                        <span class="product-loader-icon icon-16" style="display:none;"><i class="ri-loader-4-line"></i></span>
                                                                                        <span class="product-check-icon icon-16" style="display:none;"><i class="ri-check-line"></i></span>
                                                                                    </span>
                                                                                    <span class="tooltip-text">add to cart</span>
                                                                                </a>

                                                                                <!-- Success message -->
                                                                                <div id="cart-message" style="position: fixed; top: 20px; right: 20px; background: #28a745; color: white; padding: 10px 15px; border-radius: 5px; display: none; z-index: 9999;">
                                                                                </div>
                                                                                <a href="#quickview-modal"
                                                                                data-bs-toggle="modal"
                                                                                class="quick-view"
                                                                                data-id="<?php echo e($product->id); ?>"
                                                                                data-name="<?php echo e($product->name); ?>"
                                                                                data-price="<?php echo e($product->selling_price); ?>"
                                                                                data-category="<?php echo e($product->category->name); ?>"
                                                                                data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                                data-description="<?php echo e(Str::limit(strip_tags($product->short_description), 150)); ?>"
                                                                                data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                                <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                data-image<?php echo e($key+1); ?>="<?php echo e(asset($otherImage->image)); ?>"
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                                    <span class="tooltip-text">quickview</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="pro-content">
                                                                        <div class="product-title">
                                                                            <span class="d-block meb-7"><?php echo e($product->category->name); ?></span>
                                                                            <span class="d-block heading-weight">
                                                                                <a href="<?php echo e(route('product', ['id' => $product->slug])); ?>" class="primary-link"><?php echo e($product->name); ?></a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-box heading-weight">
                                                                                <span class="new-price primary-color">TK. <?php echo e($product->selling_price); ?></span>
                                                                                <span class="old-price"><span class="mer-3"></span><span class="text-decoration-line-through"></span></span>
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
                                                                                <span class="review-average">4.0<span class="review-caption">2 reviews</span></span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                        </div>
                                                                        <div class="product-action-wrap">
                                                                            <div class="product-action">
                                                                                <a href="<?php echo e(route('add-to-wishlist',['id' => $product->id])); ?>" class="add-to-wishlist">
                                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                                    <span class="tooltip-text">wishlist</span>
                                                                                </a>
                                                                                <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                                                                <span class="product-icon">
                                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                                </span>
                                                                                    <span class="tooltip-text">add to cart</span>
                                                                                </a>
                                                                                <form action="" method="POST">
                                                                                    <a href="#quickview-modal"
                                                                                    data-bs-toggle="modal"
                                                                                    class="quick-view"
                                                                                    data-id="<?php echo e($product->id); ?>"
                                                                                    data-name="<?php echo e($product->name); ?>"
                                                                                    data-price="<?php echo e($product->selling_price); ?>"
                                                                                    data-category="<?php echo e($product->category->name); ?>"
                                                                                    data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                                    data-description="<?php echo e(Str::limit(strip_tags($product->short_description), 150)); ?>"
                                                                                    data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                                    <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    data-image<?php echo e($key+1); ?>="<?php echo e(asset($otherImage->image)); ?>"
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <!-- ✅ Navigation Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-buttons-wrap">
                                            <button type="button" class="swiper-prev swiper-prev-new-arrival" aria-label="Previous">
                                                <i class="ri-arrow-left-line d-block lh-1"></i>
                                            </button>
                                            <button type="button" class="swiper-next swiper-next-new-arrival" aria-label="Next">
                                                <i class="ri-arrow-right-line d-block lh-1"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- ✅ Pagination Dots -->
                                    <div class="swiper-dots" data-animate="animate__fadeIn">
                                        <div class="swiper-pagination swiper-pagination-new-arrival"></div>
                                    </div>

                                    <div class="view-button" data-animate="animate__fadeIn">
                                        <a href="<?php echo e(route('products.all')); ?>" class="btn-style tertiary-btn">View All Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="blog-area section-ptb">
                <div class="container-fluid">
                    <div class="blog-category">
                        <div class="section-capture text-center">
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Blog Stories</h2>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="blog-slider swiper" id="blog-slider-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="blog-post banner-hover">
                                            <div class="blog-main-img">
                                                <a href="<?php echo e(route('blog')); ?>" class="d-none d-xl-block position-relative banner-img br-hidden">
                                                    <span class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">আরও পড়ুন...</span>
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/image/newsletter/blog-1.jpg" class="w-100 img-fluid" alt="a-2">
                                                </a>
                                                <a href="#" class="d-block d-xl-none banner-img br-hidden">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/image/newsletter/blog-1.jpg" class="w-100 img-fluid" alt="a-2">
                                                </a>
                                            </div>
                                            <div class="blog-post-content pst-25">
                                                <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1"><i class="ri-calendar-line primary-color fw-normal"></i> ১০ অক্টোবর, ২০২৫, ঢাকা  </div>
                                                <h6 class="font-18">বাচ্চাদের মস্তিষ্কের পরিচর্যা</h6>
                                                <p class="mst-8">শিশুর মস্তিষ্ক জন্মের পর থেকেই দ্রুত বিকশিত হতে থাকে। জন্মের প্রথম পাঁচ বছরেই তার মস্তিষ্কের প্রায় ৯০% বৃদ্ধি ঘটে।</p>
                                                <div class="d-xl-none mst-9">
                                                    <a href="<?php echo e(route('blog')); ?>" class="link-btn"> আরও পড়ুন... </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="blog-post banner-hover">
                                            <div class="blog-main-img">
                                                <a href="<?php echo e(route('blog2')); ?>" class="d-none d-xl-block position-relative banner-img br-hidden">
                                                    <span class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">আরও পড়ুন...</span>
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/image/newsletter/blog-2.jpg" class="w-100 img-fluid" alt="a-2">
                                                </a>
                                                <a href="#" class="d-block d-xl-none banner-img br-hidden">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/image/newsletter/blog-2.jpg" class="w-100 img-fluid" alt="a-2">
                                                </a>
                                            </div>
                                            <div class="blog-post-content pst-25">
                                                <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1"><i class="ri-calendar-line primary-color fw-normal"></i> ০১ নভেম্বর, ২০২৫, ঢাকা  </div>
                                                <h6 class="font-18">শিশুদের মস্তিষ্কের বিকাশ</h6>
                                                <p class="mst-8">শিশুদের মস্তিষ্ক বিকাশ: কেন গুরুত্বপূর্ণ এবং কীভাবে দ্রুত উন্নতি ঘটে</p>
                                                <div class="d-xl-none mst-9">
                                                    <a href="<?php echo e(route('blog2')); ?>" class="link-btn"> আরও পড়ুন... </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="blog-post banner-hover">
                                            <div class="blog-main-img">
                                                <a href="<?php echo e(route('blog3')); ?>" class="d-none d-xl-block position-relative banner-img br-hidden">
                                                    <span class="btn-style tertiary-btn banner-btn position-absolute top-50 start-50 translate-middle z-1 text-nowrap">আরও পড়ুন...</span>
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/image/newsletter/blog-3.jpg" class="w-100 img-fluid" alt="a-2">
                                                </a>
                                                <a href="#" class="d-block d-xl-none banner-img br-hidden">
                                                    <img src="<?php echo e(asset('/')); ?>website/assets/image/newsletter/blog-3.jpg" class="w-100 img-fluid" alt="a-2">
                                                </a>
                                            </div>
                                            <div class="blog-post-content pst-25">
                                                <div class="secondary-color mst-2 meb-7 text-uppercase heading-weight lh-1"><i class="ri-calendar-line primary-color fw-normal"></i> ১৩ নভেম্বর, ২০২৫, ঢাকা  </div>
                                                <h6 class="font-18">বিভিন্নরকম খেলনা শিশুদের বুদ্ধিবিকাশে সাহায্য করে</h6>
                                                <p class="mst-8">খেলা কেন বুদ্ধি বিকাশে এত গুরুত্বপূর্ণ?</p>
                                                <div class="d-xl-none mst-9">
                                                    <a href="<?php echo e(route('blog3')); ?>" class="link-btn"> আরও পড়ুন... </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-blog" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-blog" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-blog"></div>
                            </div>
                            <div class="view-button d-none" data-animate="animate__fadeIn">
                                <a href="#" class="btn-style tertiary-btn">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <div class="mt-9">
            <h1></h1>
        </div>

        <section class="category-product section-pt">
            <div class="container-fluid">
                <div class="collection-category">
                    <div class="section-capture text-center">
                        <div class="section-title" data-animate="animate__fadeIn">
                            <h2 class="section-heading">All Products</h2>
                        </div>
                    </div>
                    <div class="row row-mtm100">
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="collection-wrap">
                                <div class="collection-product-slider swiper" id="best-product-slider">
                                    <div class="swiper-wrapper">

                                        <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="pro-img">
                                                                    <img src="<?php echo e(asset($product->image)); ?>" class="w-100 img-fluid img1" alt="p-1">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                            <div class="product-action">
                                                                                <a href="<?php echo e(route('add-to-wishlist',['id' => $product->id])); ?>" class="add-to-wishlist">
                                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                                    <span class="tooltip-text">wishlist</span>
                                                                                </a>
                                                                                <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                                                                    <span class="product-icon">
                                                                                        <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line"></i></span>
                                                                                        <span class="product-loader-icon icon-16" style="display:none;"><i class="ri-loader-4-line"></i></span>
                                                                                        <span class="product-check-icon icon-16" style="display:none;"><i class="ri-check-line"></i></span>
                                                                                    </span>
                                                                                    <span class="tooltip-text">add to cart</span>
                                                                                </a>

                                                                                <!-- Success message -->
                                                                                <div id="cart-message" style="position: fixed; top: 20px; right: 20px; background: #28a745; color: white; padding: 10px 15px; border-radius: 5px; display: none; z-index: 9999;">
                                                                                </div>
                                                                                <a href="#quickview-modal"
                                                                                data-bs-toggle="modal"
                                                                                class="quick-view"
                                                                                data-id="<?php echo e($product->id); ?>"
                                                                                data-name="<?php echo e($product->name); ?>"
                                                                                data-price="<?php echo e($product->selling_price); ?>"
                                                                                data-category="<?php echo e($product->category->name); ?>"
                                                                                data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                                data-description="<?php echo e(Str::limit(strip_tags($product->short_description), 150)); ?>"
                                                                                data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                                <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                data-image<?php echo e($key+1); ?>="<?php echo e(asset($otherImage->image)); ?>"
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                                                    <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                                                    <span class="d-block heading-weight"><a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="primary-link"><?php echo e($product->name); ?></a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">TK. <?php echo e($product->selling_price); ?></span>
                                                                        <span class="old-price"><span class="mer-3"></span><span class="text-decoration-line-through"></span></span>
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
                                                                        <span class="review-average">4.0<span class="review-caption">2 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                            <div class="product-action">
                                                                                <a href="<?php echo e(route('add-to-wishlist',['id' => $product->id])); ?>" class="add-to-wishlist">
                                                                                    <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                                    <span class="tooltip-text">wishlist</span>
                                                                                </a>
                                                                                <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                                                                <span class="product-icon">
                                                                                    <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                    <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                    <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                                </span>
                                                                                    <span class="tooltip-text">add to cart</span>
                                                                                </a>
                                                                                <form action="" method="POST">
                                                                                    <a href="#quickview-modal"
                                                                                    data-bs-toggle="modal"
                                                                                    class="quick-view"
                                                                                    data-id="<?php echo e($product->id); ?>"
                                                                                    data-name="<?php echo e($product->name); ?>"
                                                                                    data-price="<?php echo e($product->selling_price); ?>"
                                                                                    data-category="<?php echo e($product->category->name); ?>"
                                                                                    data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                                    data-description="<?php echo e(Str::limit(strip_tags($product->short_description), 150)); ?>"
                                                                                    data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                                    <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $otherImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    data-image<?php echo e($key+1); ?>="<?php echo e(asset($otherImage->image)); ?>"
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                                                        <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
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
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="swiper-buttons-wrap">
                                        <button type="button" class="swiper-prev swiper-prev-best-product" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                        <button type="button" class="swiper-next swiper-next-best-product" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                    </div>
                                </div>
                                <div class="swiper-dots" data-animate="animate__fadeIn">
                                    <div class="swiper-pagination swiper-pagination-best-product"></div>
                                </div>
                                <div class="view-button " data-animate="animate__fadeIn">
                                    <a href="<?php echo e(route('products.all')); ?>" class="btn-style tertiary-btn">View all item</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5">
                            <!-- category-product-banner start -->
                            <div class="category-product-banner height-lg-100 position-relative banner-hover br-hidden">
                                <a href="#" class="d-block height-lg-100 banner-img"><img src="<?php echo e(asset('/')); ?>website/assets/image/index/product-banner2.jpg" class="w-100 height-lg-100 img-fluid" alt="product-banner2"></a>
                                <div class="position-absolute bottom-0 start-0 end-0 meb-30 meb-xl-50 mlr-15 mlr-md-30 mlr-xxl-50">
                                    <div class="category-product-banner-content d-flex justify-content-center">
                                        <a href="<?php echo e(route('products.all')); ?>" class="btn-style tertiary-btn">Shop now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- category-product-banner start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\toyhaven\resources\views/website/home/index.blade.php ENDPATH**/ ?>