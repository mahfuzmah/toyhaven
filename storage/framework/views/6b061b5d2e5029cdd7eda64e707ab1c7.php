<div class="bottom-menu d-md-none position-sticky bottom-0 body-bg z-1 box-shadow">
    <div class="bottom-menu-element d-flex flex-wrap align-items-center">
        <div class="col">
            <a href="<?php echo e(route('home')); ?>" class="d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon heading-color icon-16"><i class="ri-home-8-line d-block lh-1"></i></span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo e(route('customer.login')); ?>" class="d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon heading-color icon-16"><i class="ri-user-line d-block lh-1"></i></span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Account</span>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo e(route('products.all')); ?>" class="d-flex flex-column align-items-center ptb-10 text-center">
                <span class="bottom-menu-icon heading-color icon-16"><i class="ri-layout-grid-line d-block lh-1"></i></span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Shop</span>
            </a>
        </div>
        <div class="col">
            <a href="<?php echo e(route('customer.wishlist')); ?>" class="d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon-wrap position-relative per-8">
                            <span class="d-block bottom-menu-icon heading-color icon-16"><i class="ri-heart-line d-block lh-1"></i></span>
                            <span class="bottom-menu-counter wishlist-counter extra-color font-10 position-absolute end-0 primary-bg d-flex align-items-center justify-content-center rounded-circle"><?php echo e($totalWishlist); ?>

                                <script>
                                                                    function updateCartCounter(newCount) {
                                                                        var $counter = $('.cart-counter');

                                                                        $counter.fadeOut(150, function() {
                                                                            $counter.text(newCount);
                                                                            $counter.fadeIn(150);
                                                                        });
                                                                    }
                                                                </script>
                            </span>
                        </span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Wishlist</span>
            </a>
        </div>
        <div class="col">
            <a href="javascript:void(0)" class="js-cart-drawer d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon-wrap position-relative per-8">
                            <span class="d-block bottom-menu-icon heading-color icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                            <span class="bottom-menu-counter cart-counter extra-color font-10 position-absolute end-0 primary-bg d-flex align-items-center justify-content-center rounded-circle"><?php echo e(count(Cart::content())); ?></span>
                        </span>
                <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Cart</span>
            </a>
        </div>
    </div>
</div><?php /**PATH C:\toyhaven\resources\views/website/includes/bottom-menu.blade.php ENDPATH**/ ?>