<div class="cart-drawer position-fixed top-0 bottom-0 body-bg z-index-5 invisible box-shadow" id="cart-drawer" wire:ignore.self>
    <div class="drawer-contents d-flex flex-column h-100">
        <div class="drawer-fixed-header ptb-10 plr-15 beb">
            <div class="drawer-header d-flex align-items-center justify-content-between">
                <h6 class="font-18">My shopping cart</h6>
                <div class="drawer-close">
                    <button type="button" class="drawer-close-btn body-secondary-color icon-16" aria-label="Close">
                        <i class="ri-close-large-line d-block lh-1"></i>
                    </button>
                </div>
            </div>
        </div>

        <!--[if BLOCK]><![endif]--><?php if($count == 0): ?>
        <div class="drawer-cart-empty h-100 ptb-30 plr-15">
            <div class="drawer-scrollable h-100 d-flex flex-column align-items-center justify-content-center text-center">
                <span class="heading-color icon-32 meb-24"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                <h2 class="font-24">Your cart is empty</h2>
                <a href="<?php echo e(route('products.all')); ?>" class="btn-style secondary-btn mst-24">Continue shopping</a>
            </div>
        </div>
        <?php else: ?>
        <div class="drawer-inner h-100 d-flex flex-column justify-content-between overflow-hidden">
            <div class="drawer-scrollable h-100 overflow-auto">
                <div class="cart-drawer-table plr-15">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cart-drawer-info ptb-15 bst" wire:key="drawer-<?php echo e($item->rowId); ?>">
                            <div class="cart-drawer-content d-flex flex-wrap">
                                <div class="cart-drawer-image width-88">
                                    <a href="<?php echo e(route('product', ['id' => $item->id])); ?>" class="d-block br-hidden">
                                        <img src="<?php echo e(asset($item->options['image'] ?? 'assets/default.png')); ?>" class="w-100 img-fluid" alt="cart-1">
                                    </a>
                                </div>
                                <div class="cart-drawer-info width-calc-88 psl-15">
                                    <div class="cart-drawer-detail">
                                        <a href="<?php echo e(route('product', ['id' => $item->id])); ?>"
                                           class="primary-link heading-weight"><?php echo e($item->name); ?></a>
                                    </div>
                                    <div class="heading-color heading-weight mst-7">TK. <?php echo e($item->price); ?></div>
                                    <div class="cart-drawer-qty-remove d-flex align-items-end justify-content-between mst-16">
                                        <div class="js-qty-wrapper">
                                            <div class="js-qty-wrap d-flex body-bg border-full br-hidden">
                                                <button type="button"
                                                        wire:click="decreaseQuantity('<?php echo e($item->rowId); ?>')"
                                                        class="js-qty-adjust js-qty-adjust-minus body-color icon-16"
                                                        aria-label="Decrease qty"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                <input type="number"
                                                       class="js-qty-num p-0 text-center border-0"
                                                       value="<?php echo e($item->qty); ?>"
                                                       readonly
                                                       style="pointer-events: none;"> <!-- Making readyonly as buttons handle it better for drawer -->
                                                <button type="button"
                                                        wire:click="increaseQuantity('<?php echo e($item->rowId); ?>')"
                                                        class="js-qty-adjust js-qty-adjust-plus body-color icon-16"
                                                        aria-label="Increase qty"><i class="ri-add-line d-block lh-1"></i></button>
                                            </div>
                                        </div>

                                        <a href="javascript:void(0)" 
                                           wire:click="remove('<?php echo e($item->rowId); ?>')" 
                                           class="cart-drawer-remove text-danger icon-16">
                                            <i class="ri-delete-bin-line d-block lh-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            <div class="drawer-footer ptb-15 plr-15 bst">
                <div class="drawer-total d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span class="heading-color heading-weight">TK. <?php echo e($subtotal); ?></span>
                </div>

                <div class="drawer-cart-checkout mst-12">
                     <div class="drawer-cart-box meb-11">
                        <label class="cust-checkbox-label checkbox-agree">
                            <input type="checkbox" id="drawer-terms" name="drawer-terms"
                                   class="cust-checkbox checkboxbtn">
                            <span class="d-block cust-check"></span>
                            <span class="login-read">I agree with <a href="#" class="body-secondary-color text-decoration-underline">Terms & Conditions</a></span>
                        </label>
                    </div>
                    <div class="row btn-row15">
                        <div class="col-12 col-md-12">
                            <a href="<?php echo e(route('cart.index')); ?>" class="w-100 btn-style secondary-btn">View cart</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo e(route('checkout.index')); ?>" class="w-100 btn-style secondary-btn d-none">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\toyhaven\resources\views/livewire/cart-drawer.blade.php ENDPATH**/ ?>