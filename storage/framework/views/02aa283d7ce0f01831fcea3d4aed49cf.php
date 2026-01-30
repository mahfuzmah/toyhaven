<!DOCTYPE html>
<html lang="en">
<head>
     <title>ToyHavenBD</title>
   <!--  meta -->
    <?php echo $__env->make('website.includes.meta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

     <?php echo $__env->make('website.includes.google-fb', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <!--css -->
     <?php echo $__env->make('website.includes.style', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
     <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body>
   <!--noscript-->
   <?php echo $__env->make('website.includes.noscript', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="preloader position-fixed top-0 start-0 w-100 h-100 body-bg z-index-5">
    <div
        class="loader-img position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
        <img src="<?php echo e(asset('/')); ?>website/assets/image/index/logo.png" class="width-88 width-xl-112 img-fluid" alt="logo">
    </div>
</div>

<!-- header start -->
 <?php echo $__env->make('website.includes.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- header end -->
<!-- main start -->

 <?php echo $__env->make('website.includes.cart', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<main id="mainBody">
    <?php echo $__env->yieldContent('body'); ?>
</main>


<!-- main end -->
<!-- footer start -->


 <?php echo $__env->make('website.includes.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- footer end -->






<?php if(Request::route()->getName() == 'home'|| Request::route()->getName() == 'category'  || Request::route()->getName() == 'product'|| Request::route()->getName() == 'product.age' || Request::route()->getName() == 'products.all' || Request::route()->getName() == 'cart.index' || Request::route()->getName() == 'subCategory'): ?>


<!-- quickview-modal start -->
  <?php echo $__env->make('website.includes.quickview', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- quickview-modal end -->

<?php endif; ?>

<!-- mobile-menu start -->
 <?php echo $__env->make('website.includes.mobile-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- mobile-menu end -->

<!-- search-modal start -->
 <?php echo $__env->make('website.includes.search', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- search-modal end -->

<!-- cart-drawer start -->
<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('cart-drawer');

$__html = app('livewire')->mount($__name, $__params, 'lw-3965705430-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<!-- cart-drawer end -->

<!-- bottom-menu start -->
 <?php echo $__env->make('website.includes.bottom-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- bottom-menu end -->

<!-- bg-screen start -->
 <?php echo $__env->make('website.includes.big-screen', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- bg-screen end -->

<!-- js -->
 <?php echo $__env->make('website.includes.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH C:\toyhaven\resources\views/website/master.blade.php ENDPATH**/ ?>