<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\ServiceProvider;
use View;
use Session;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        View::composer('website.master', function ($view){
            if($customerId = Session::get('customer_id'))
            {
                $countWishlist = count(Wishlist::where('customer_id',$customerId)->get());
            }
            else
            {
                $countWishlist = 0;
            }
            $view->with('categories', Category::all());
            $view->with('products', Product::all());
            $view->with('totalWishlist', $countWishlist);
        });
    }
}
