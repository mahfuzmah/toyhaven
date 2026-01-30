<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopgridController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandContrller;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\AdminOrderController;
use MongoDB\Driver\Exception\SSLConnectionException;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\FacebookCatalogController;

use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/', [ShopgridController::class,'index'])->name('home');
Route::get('/ajax-product-search',  [ShopgridController::class, 'ajaxProductSearch'])->name('ajax-product-search');
Route::get('/product-category/{id}', [ShopgridController::class,'category'])->name('category');
Route::get('/product-sub-category/{id}', [ShopgridController::class,'subCategory'])->name('subCategory');
Route::get('/product/shop', [ShopgridController::class,'categoryPage'])->name('category.page');
Route::get('/product-by-age/{age}', [ShopgridController::class,'productAgeFilter'])->name('product.age');

Route::get('/product-detail/{id}', [ShopgridController::class, 'product'])->name('product');
Route::get('/quickview', [ShopgridController::class, 'quickview']);



Route::get('/facebook/catalog.xml', [FacebookCatalogController::class, 'index']);



Route::get('/test/page', [ShopgridController::class, 'test'])->name('test.page');

Route::get('/wishlist', [ShopgridController::class, 'wishlist'])->name('wishlist');

Route::get('/add-to-wishlist/{id}', [ShopgridController::class, 'addToWishlist'])->name('add-to-wishlist');
Route::get('/website/buy-now/{id}', [ShopgridController::class, 'buyNow'])->name('website.buy-now');


Route::get('/blog', [ShopgridController::class, 'blog'])->name('blog');
Route::get('/blog2', [ShopgridController::class, 'blog2'])->name('blog2');
Route::get('/blog3', [ShopgridController::class, 'blog3'])->name('blog3');

Route::get('/about-us', [ShopgridController::class, 'aboutus'])->name('aboutus');

Route::get('/cookie', [ShopgridController::class, 'cookie'])->name('cookie');
Route::get('/payment', [ShopgridController::class, 'payment'])->name('payment');
Route::get('/privacy', [ShopgridController::class, 'privacy'])->name('privacy');
Route::get('/return-refund', [ShopgridController::class, 'refund'])->name('refund');
Route::get('/shipping', [ShopgridController::class, 'shipping'])->name('shipping');
Route::get('/terms-condition', [ShopgridController::class, 'condition'])->name('condition');

Route::get('/all-products', [ShopgridController::class, 'productsAll'])->name('products.all');


Route::get('/cart/index', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/buy-now', [CartController::class, 'buyNow'])->name('cart.buyNow');
Route::post('/cart/ajax-add', [CartController::class, 'ajaxAddToCart'])->name('cart.ajaxAdd');

Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/buy-now-modal', [CartController::class, 'buyNowModal'])->name('cart.buyNowModal');

Route::get('/checkout/index', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/buy/now/modal', [CheckoutController::class, 'newOrder'])->name('checkout.new-order');
Route::get('/checkout/complete-order', [CheckoutController::class, 'completeOrder'])->name('checkout.complete-order');

Route::get('/customer/login', [AuthController::class, 'login'])->name('customer.login');
Route::post('/customer/login', [AuthController::class, 'loginCheck'])->name('customer.loginCheck');
Route::get('/customer/register', [AuthController::class, 'register'])->name('customer.register');
Route::post('/customer/register', [AuthController::class, 'newCustomer'])->name('customer.newRegister');
Route::get('/customer/customer-logout', [AuthController::class, 'logout'])->name('customer.logout');
Route::get('/customer/dashboard', [AuthController::class, 'dashboard'])->name('customer.dashboard');


Route::middleware(['customer'])->group(function () {
    Route::get('/customer/dashboard', [AuthController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('/customer/profile', [CustomerProfileController::class, 'profile'])->name('customer.profile');
    Route::get('/customer/my-order', [CustomerProfileController::class, 'order'])->name('customer.my-order');
    Route::get('/customer/wishlist', [CustomerProfileController::class, 'wishlist'])->name('customer.wishlist');
    Route::get('/customer/wishlist-remove-product/{id}', [CustomerProfileController::class, 'removeProduct'])->name('customer.wishlist-remove-product');

    Route::get('/customer/my-payment', [CustomerProfileController::class, 'myPayment'])->name('customer.my-payment');
    Route::get('/customer/change-password', [CustomerProfileController::class, 'password'])->name('customer.change-password');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard') ;

    Route::get('/category/index', [CategoryController::class, 'index'] )->name('category.index') ;
    Route::get('/category/create', [CategoryController::class, 'create'] )->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'] )->name('category.store') ;
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'] )->name('category.edit');
    Route::post('/category/update', [CategoryController::class, 'update'] )->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'] )->name('category.delete');


    Route::get('/sub-category/index', [SubCategoryController::class, 'index'] )->name('sub-category.index') ;
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'] )->name('sub-category.create');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'] )->name('sub-category.store') ;
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'] )->name('sub-category.edit');
    Route::post('/sub-category/update', [SubCategoryController::class, 'update'] )->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'] )->name('sub-category.delete');

    Route::get('/brand/index', [BrandContrller::class, 'index'] )->name('brand.index') ;
    Route::get('/brand/create', [BrandContrller::class, 'create'] )->name('brand.create') ;
    Route::post('/brand/store', [BrandContrller::class, 'store'] )->name('brand.store') ;
    Route::get('/brand/edit/{id}', [BrandContrller::class, 'edit'] )->name('brand.edit') ;
    Route::post('/brand/update', [BrandContrller::class, 'update'] )->name('brand.update') ;
    Route::get('/brand/delete/{id}', [BrandContrller::class, 'delete'] )->name('brand.delete') ;

    Route::get('/unit/index', [UnitController::class, 'index'] )->name('unit.index') ;
    Route::get('/unit/create', [UnitController::class, 'create'] )->name('unit.create') ;
    Route::post('/unit/store', [UnitController::class, 'store'] )->name('unit.store') ;
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'] )->name('unit.edit') ;
    Route::post('/unit/update', [UnitController::class, 'update'] )->name('unit.update') ;
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'] )->name('unit.delete') ;

    Route::get('/user/index', [UserController::class, 'index'] )->name('user.index') ;
    Route::get('/user/create', [UserController::class, 'create'] )->name('user.create') ;

    Route::resource('product', ProductController::class );
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');

    Route::resource('couriers', CourierController::class);

    Route::get('/admin/all-order', [AdminOrderController::class, 'index'])->name('admin.all-order');
    Route::get('/admin/order-detail/{id}', [AdminOrderController::class, 'detail'])->name('admin.order-detail');
    Route::get('/admin/order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
    Route::get('/admin/order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
    Route::get('/admin/order-invoice-print/{id}', [AdminOrderController::class, 'printInvoice'])->name('admin.order-invoice-print');
    Route::post('/admin/order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
    Route::post('/admin/order-delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.order-delete');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
