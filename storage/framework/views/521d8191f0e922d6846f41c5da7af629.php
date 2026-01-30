<?php $__env->startSection('body'); ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="<?php echo e(asset('/')); ?>website/assets/image/other/Untitled-1.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="<?php echo e(route('home')); ?>" class="extra-color">Home</a> / Category</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9"><?php echo e($title ?? 'Category View'); ?></h2>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- main start -->
    <main id="main">
        <!-- shop-content start -->
        <section class="shop-content section-ptb">
            <form id="shopForm" action="<?php echo e(url()->current()); ?>" method="GET">
                <div class="container">
                    <div class="row align-items-xl-start">
                        <!-- shop-sidebar start -->
                        <div class="col-12 col-xl-3 p-xl-sticky top-0">
                            <div class="shop-sidebar-wrap shop-filter-sidebar" data-animate="animate__fadeIn">
                                <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>

                                <!-- shop-categories start -->
                                <div class="shop-sidebar shop-categories">
                                    <h6 class="font-18">Categories</h6>
                                    <div class="shop-cat-post mst-21">
                                        <div class="shop-cat ul-mtm-15">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(route('category', ['id' => $category->id])); ?>" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span><?php echo e($category->name); ?></span>
                                                    <span><?php echo e($category->products_count); ?></span>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- shop-categories end -->
                                <!-- shop-availability start -->
                                <div class="shop-sidebar availability">
                                    <h6 class="font-18">Availability</h6>
                                    <div class="shop-element mst-22">
                                        <ul class="shop-filters ul-mtm-15">
                                            <li>
                                                <label class="cust-checkbox-label d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" id="shop-in-stock" name="stock_amount" class="cust-checkbox" value="1" <?php echo e(request('stock_amount') ? 'checked' : ''); ?>>
                                                    <span class="d-block cust-check"></span>
                                                    <span class="shop-name me-auto">In stock</span>
                                                    <span class="shop-count">12</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="shop-sidebar price">
                                    <h6 class="font-18">Price</h6>
                                    <div class="shop-header d-flex justify-content-between mst-21">
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <?php
                                                $maxDbPrice = \App\Models\Product::max('selling_price') ?? 10000;
                                                $currentMin = request('min_price', 0);
                                                $currentMax = request('max_price', $maxDbPrice);
                                            ?>
                                            <span class="shop-selected" style="font-size: 14px">The highest price is TK. <?php echo e($maxDbPrice); ?></span>
                                        </div>
                                        <a href="<?php echo e(url()->current()); ?>" class="shop-reset body-secondary-color text-decoration-underline" style="font-size: 14px"><span class="position-relative">Reset</span></a>
                                    </div>
                                    <div class="shop-element mst-26">
                                        <div class="price-input-range">
                                            <div class="price-range">
                                                <div class="price-container">
                                                    <div class="price-slider"></div>
                                                </div>
                                                <div class="range-input position-relative">
                                                    <input type="range" class="min-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="10000" value="0" step="1">
                                                    <input type="range" class="max-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="10000" value="10000" step="1">
                                                </div>
                                            </div>
                                            <div class="price-input d-flex align-items-center mst-30">
                                                <div class="price-field position-relative w-100">
                                                    <span class="price-input-title position-absolute top-0 start-0">From</span>
                                                    <span class="price-input-prefix position-absolute top-50 translate-middle-y">0</span>
                                                    <input type="number" id="min-price" name="min_price" class="min-input w-100 h-100 text-end" min="0" max="10000" value="<?php echo e(request('min_price', 0)); ?>">
                                                </div>
                                                <div class="price-input-separator mlr-15"></div>
                                                <div class="price-field position-relative w-100">
                                                    <span class="price-input-title position-absolute top-0 start-0"></span>
                                                    <span class="price-input-prefix position-absolute top-50 translate-middle-y"></span>
                                                    <input type="number" id="max-price" name="max_price" class="max-input w-100 h-100 text-end" min="0" max="10000" value="<?php echo e(request('max_price', 10000)); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- shop-sidebar price end -->


                                <!-- shop-sidebar material start -->
                                <div class="shop-sidebar material">
                                    <h6 class="font-18">Material</h6>
                                    <div class="shop-header d-flex justify-content-between mst-21">
                                        <span class="shop-selected">1 selected</span>
                                        <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                    </div>
                                    <div class="shop-element mst-26">
                                        <ul class="shop-filters ul-mt5">
                                            <li>
                                                <label class="cust-checkbox-label">
                                                    <input type="checkbox" id="shop-polyester" name="shop-polyester" class="cust-checkbox" value="polyester" checked>
                                                    <span class="d-block cust-check">Plastic</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cust-checkbox-label">
                                                    <input type="checkbox" id="shop-wool-blend" name="shop-wool-blend" class="cust-checkbox" value="wool-blend">
                                                    <span class="d-block cust-check">Wooden</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="cust-checkbox-label">
                                                    <input type="checkbox" id="shop-cotton" name="shop-cotton" class="cust-checkbox" value="cotton">
                                                    <span class="d-block cust-check">Cushion</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- shop-sidebar material end -->
                            </div>
                            <!-- collection-product-list start -->
                            <div class="collection-product-list d-none d-xl-block pst-30 mst-30 bst">
                                <div class="side-collection-category">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h6 class="width-calc-32 font-18" data-animate="animate__fadeIn">Special products</h6>
                                        <div class="swiper-buttons width-32 lh-1" data-animate="animate__fadeIn">
                                            <div class="swiper-buttons-wrap d-flex">
                                                <button type="button" class="swiper-prev swiper-prev-special-product primary-link" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                                <button type="button" class="swiper-next swiper-next-special-product primary-link" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="side-collection-wrap mst-25">
                                        <div class="collection-slider swiper" id="special-product-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <?php $__currentLoopData = $specialProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="single-product-wrap d-flex flex-wrap">
                                                                <div class="width-120 product-image">
                                                                    <a href="<?php echo e(route('product', ['id' => $specialProduct->id])); ?>" class="pro-img"><img src="<?php echo e(asset($specialProduct->image)); ?>" class="w-100 img-fluid" alt="p-1"></a>
                                                                </div>
                                                                <div class="width-calc-120 product-content">
                                                                    <div class="pro-content">
                                                                        <div class="product-title">
                                                                            <span class="d-block"><a href="<?php echo e(route('product', ['id' => $specialProduct->id])); ?>" class="d-block w-100 primary-link text-truncate heading-weight"><?php echo e($specialProduct->name); ?></a></span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-box heading-weight">
                                                                                <span class="new-price primary-color">TK. <?php echo e($specialProduct->regular_price); ?></span>
                                                                                <span class="old-price"><span class="mer-3"></span><span class="text-decoration-line-through"></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collection-product-list end -->
                            <!-- shop-sidebar banner start -->

                            <!-- shop-sidebar banner end -->
                        </div>
                        <!-- shop-sidebar end -->
                        <div class="col-12 col-xl-9 p-xl-sticky top-0">
                            <!-- collection-info start -->
                            <div class="row row-mtm" data-animate="animate__fadeIn">
                                <div class="col-12">
                                    <div class="row row-mtm15">
                                        <!-- collection-title start -->
                                        <div class="collection-title">
                                            <h6 class="font-18"><?php echo e($title ?? 'Category View'); ?></h6>
                                        </div>
                                        <!-- collection-title end -->
                                        <!-- collection-img start -->
                                        <div class="collection-img">
                                            <img src="#" class="w-100 img-fluid border-radius" alt="">
                                        </div>
                                        <!-- collection-img end -->
                                        <!-- shop-top-bar start -->
                                        <div class="shop-top-bar">
                                            <div class="row row-mtm15 align-items-md-center">
                                                <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                                                    <div class="shop-filter-view ul-mt15 align-items-center">
                                                        <!-- shop-filter start -->
                                                        <div class="shop-filter">
                                                            <button type="button" class="shop-filter-btn secondary-color d-flex align-items-center"><i class="ri-filter-line icon-16 mer-5"></i>Filter</button>
                                                        </div>
                                                        <!-- shop-filter end -->
                                                        <!-- shop-view-mode start -->
                                                        <div class="shop-view-mode">
                                                            <div class="ul-mt10">
                                                                <button type="button" class="shop-view-btn primary-color icon-16 opacity-100 disabled" data-view="grid" aria-label="Grid view"><i class="ri-layout-grid-line"></i></button>
                                                                <button type="button" class="shop-view-btn body-color icon-16 opacity-100" data-view="list" aria-label="List view"><i class="ri-list-unordered"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- shop-view-mode end -->
                                                        <!-- shop-show-product start -->
                                                        <div class="shop-show-product">
                                                            <?php if(method_exists($products, 'total')): ?>
                                                                Showing <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> products
                                                            <?php else: ?>
                                                                Showing <?php echo e($products->count()); ?> products
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- shop-show-product end -->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                                                    <input type="hidden" name="sortby" id="sortInput" value="<?php echo e(request('sortby','created-descending')); ?>">

                                                    <div class="shop-short d-flex flex-wrap position-relative">
                                                        <label for="sortby" class="width-64 secondary-color heading-weight">Sort by:</label>

                                                        <select id="sortby_mobile" class="d-xl-none width-calc-64 h-auto ptb-0 bg-transparent border-0" onchange="document.getElementById('sortInput').value = this.value; document.getElementById('shopForm').submit();">
                                                            <option value="manual" <?php echo e(request('sortby') == 'manual' ? 'selected' : ''); ?>>Featured</option>
                                                            <option value="best-selling" <?php echo e(request('sortby') == 'best-selling' ? 'selected' : ''); ?>>Best selling</option>
                                                            <option value="title-ascending" <?php echo e(request('sortby') == 'title-ascending' ? 'selected' : ''); ?>>Alphabetically, A-Z</option>
                                                            <option value="title-descending" <?php echo e(request('sortby') == 'title-descending' ? 'selected' : ''); ?>>Alphabetically, Z-A</option>
                                                            <option value="price-ascending" <?php echo e(request('sortby') == 'price-ascending' ? 'selected' : ''); ?>>Price, low to high</option>
                                                            <option value="price-descending" <?php echo e(request('sortby') == 'price-descending' ? 'selected' : ''); ?>>Price, high to low</option>
                                                            <option value="created-descending" <?php echo e(request('sortby') == 'created-descending' ? 'selected' : ''); ?>>Date, new to old</option>
                                                            <option value="created-ascending" <?php echo e(request('sortby') == 'created-ascending' ? 'selected' : ''); ?>>Date, old to new</option>
                                                        </select>

                                                        <a href="javascript:void(0)" class="short-title width-calc-64 body-color d-none d-xl-flex align-items-xl-start justify-content-xl-between">
            <span class="sort-title">
                <?php
                    $sorts = [
                        'manual' => 'Featured',
                        'best-selling' => 'Best selling',
                        'title-ascending' => 'Alphabetically, A-Z',
                        'title-descending' => 'Alphabetically, Z-A',
                        'price-ascending' => 'Price, low to high',
                        'price-descending' => 'Price, high to low',
                        'created-descending' => 'Date, new to old',
                        'created-ascending' => 'Date, old to new'
                    ];
                    echo $sorts[request('sortby')] ?? 'Date, new to old';
                ?>
            </span>
                                                            <span class="sort-icon heading-weight"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                        </a>

                                                        <ul class="collapse position-absolute top-100 start-0 end-0 ptb-5 body-bg z-1 DropDownSlide br-hidden box-shadow" id="select-wrap">
                                                            <?php $__currentLoopData = $sorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="<?php echo e(request('sortby', 'created-descending') == $value ? 'selected' : ''); ?>">
                                                                    <a href="javascript:void(0)" data-value="<?php echo e($value); ?>" class="sort-option d-block ptb-5 plr-15 <?php echo e(request('sortby', 'created-descending') == $value ? 'secondary-color extra-bg' : 'body-primary-color'); ?>">
                                                                        <?php echo e($label); ?>

                                                                    </a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- shop-top-bar end -->
                                        <!-- shop-border start -->
                                        <div class="shofvp-border">
                                            <div class="bst"></div>
                                        </div>
                                        <!-- shop-border end -->
                                        <!-- shop-filter-list start -->
                                        <div class="shop-filter-list d-flex align-items-start justify-content-between">
                                            <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                                        </div>
                                        <!-- shop-filter-list end -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="shop-product-wrap data-grid">
                                        
                                        <div class="row row-mtm">
                                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                    <div class="single-product">
                                                        <div class="row single-product-wrap">

                                                            
                                                            <div class="product-image-col">
                                                                <div class="product-image">
                                                                    <a href="<?php echo e(route('product', $product->id)); ?>" class="pro-img">
                                                                        <img src="<?php echo e(asset($product->image)); ?>" class="w-100 img-fluid img1" alt="<?php echo e($product->name); ?>">
                                                                    </a>

                                                                    
                                                                    <div class="product-action-wrap">
                                                                        <div class="product-action">

                                                                            <a href="<?php echo e(route('add-to-wishlist',$product->id)); ?>" class="add-to-wishlist">
                                        <span class="product-icon">
                                            <i class="ri-heart-line icon-16"></i>
                                        </span>
                                                                            </a>

                                                                            <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->id); ?>">
                                        <span class="product-icon">
                                            <i class="ri-shopping-bag-3-line icon-16"></i>
                                        </span>
                                                                            </a>

                                                                            <a href="#quickview-modal"
                                                                               data-bs-toggle="modal"
                                                                               class="quick-view"
                                                                               data-id="<?php echo e($product->id); ?>"
                                                                               data-name="<?php echo e($product->name); ?>"
                                                                               data-price="<?php echo e($product->selling_price); ?>"
                                                                               data-category="<?php echo e($product->category->name); ?>"
                                                                               data-stock="<?php echo e($product->stock ?? 0); ?>"
                                                                               data-description="<?php echo e(Str::limit(strip_tags($product->short_description),150)); ?>"
                                                                               data-image-main="<?php echo e(asset($product->image)); ?>"
                                                                               <?php $__currentLoopData = $product->otherImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                               data-image<?php echo e($key+1); ?>="<?php echo e(asset($img->image)); ?>"
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                        <span class="product-icon">
                                            <i class="ri-eye-line icon-16"></i>
                                        </span>
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="product-content">
                                                                <div class="pro-content">

                                                                    <div class="product-title">
                                                                        <a href="<?php echo e(route('product',$product->id)); ?>" class="primary-link heading-weight">
                                                                            <?php echo e($product->name); ?>

                                                                        </a>
                                                                    </div>

                                                                    <div class="product-price">
                                <span class="new-price primary-color">
                                    TK. <?php echo e($product->selling_price); ?>

                                </span>
                                                                    </div>

                                                                    <div class="product-description">
                                                                        <p><?php echo e($product->short_description); ?></p>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <div class="col-12 text-center">
                                                    <p class="text-muted">No products found</p>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        
                                        <?php if($products->isEmpty()): ?>
                                            <div class="col-12 text-center mt-5">
                                                <h4>No products found in this category.</h4>
                                            </div>
                                        <?php endif; ?>
                                        <div class="mt-4 d-flex justify-content-center">
                                            <?php echo e($products->appends(request()->query())->links('pagination::bootstrap-5')); ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- collection-info end -->
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- shop-content start -->
    </main>
    <!-- main end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\toyhaven\resources\views/website/category/index.blade.php ENDPATH**/ ?>