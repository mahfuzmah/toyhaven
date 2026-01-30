<!DOCTYPE html>
<html lang="en">
<head>
     <title>ToyHavenBD</title>
   <!--  meta -->
    @include('website.includes.meta')

     @include('website.includes.google-fb')

      <!--css -->
     @include('website.includes.style')
     @livewireStyles
</head>
<body>
   <!--noscript-->
   @include('website.includes.noscript')
<div class="preloader position-fixed top-0 start-0 w-100 h-100 body-bg z-index-5">
    <div
        class="loader-img position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
        <img src="{{asset('/')}}website/assets/image/index/logo.png" class="width-88 width-xl-112 img-fluid" alt="logo">
    </div>
</div>

<!-- header start -->
 @include('website.includes.header')
<!-- header end -->
<!-- main start -->

 @include('website.includes.cart')
<main id="mainBody">
    @yield('body')
</main>


<!-- main end -->
<!-- footer start -->


 @include('website.includes.footer')

<!-- footer end -->

{{-- Product Cards --}}


{{-- Quickview Modal (Only once in template) --}}

@if (Request::route()->getName() == 'home'|| Request::route()->getName() == 'category'  || Request::route()->getName() == 'product'|| Request::route()->getName() == 'product.age' || Request::route()->getName() == 'products.all' || Request::route()->getName() == 'cart.index' || Request::route()->getName() == 'subCategory')


<!-- quickview-modal start -->
  @include('website.includes.quickview')
<!-- quickview-modal end -->

@endif

<!-- mobile-menu start -->
 @include('website.includes.mobile-menu')
<!-- mobile-menu end -->

<!-- search-modal start -->
 @include('website.includes.search')
<!-- search-modal end -->

<!-- cart-drawer start -->
@livewire('cart-drawer')
<!-- cart-drawer end -->

<!-- bottom-menu start -->
 @include('website.includes.bottom-menu')
<!-- bottom-menu end -->

<!-- bg-screen start -->
 @include('website.includes.big-screen')
<!-- bg-screen end -->

<!-- js -->
 @include('website.includes.script')
 @livewireScripts
</body>
</html>
