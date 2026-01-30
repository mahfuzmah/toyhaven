<?php $__env->startSection('body'); ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area ptb-30 bg-img text-center" data-bgimg="<?php echo e(asset('/')); ?>website/assets/image/other/Untitled-1.jpg">
        <div class="container">
            <span class="d-block extra-color"><a href="<?php echo e(route('home')); ?>" class="extra-color">Home</a> / Category</span>
            <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Category View</h2>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <main id="main">
        <section class="shop-content section-ptb">
            <form id="shopForm" action="<?php echo e(url()->current()); ?>" method="GET">
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
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(route('category', ['id' => $category->id])); ?>" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span><?php echo e($category->name); ?></span>
                                                    <span><?php echo e($category->products_count); ?></span>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                            <div class="single-product">
                                                <div class="row single-product-wrap">

                                                    <!-- IMAGE -->
                                                    <div class="product-image-col">
                                                        <div class="product-image">
                                                            <a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="pro-img">
                                                                <img src="<?php echo e(asset($product->image)); ?>" class="w-100 img-fluid img1" alt="<?php echo e($product->name); ?>">
                                                            </a>

                                                            <!-- ACTION -->
                                                            <div class="product-action-wrap">
                                                                <div class="product-action">
                                                                    <a href="<?php echo e(route('add-to-wishlist', ['slug' => $product->slug])); ?>" class="add-to-wishlist">
                                                                    <span class="product-icon">
                                                                        <i class="ri-heart-line icon-16"></i>
                                                                    </span>
                                                                    </a>

                                                                    <a href="javascript:void(0)" class="add-to-cart" data-id="<?php echo e($product->slug); ?>">
                                                                    <span class="product-icon">
                                                                        <i class="ri-shopping-bag-3-line icon-16"></i>
                                                                    </span>
                                                                    </a>

                                                                    <a href="#quickview-modal"
                                                                       data-bs-toggle="modal"
                                                                       class="quick-view"
                                                                       data-id="<?php echo e($product->slug); ?>"
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

                                                    <!-- CONTENT -->
                                                    <div class="product-content">
                                                        <div class="pro-content">
                                                            <div class="product-title">
                                                                <a href="<?php echo e(route('product', ['id' => $product->id])); ?>" class="primary-link heading-weight">

<?php echo $__env->make('website.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\toyhaven\resources\views/website/product/products.blade.php ENDPATH**/ ?>