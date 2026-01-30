<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\SubCategory;
use Session;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ShopgridController extends Controller
{
    public $customer;

    public function index()
    {
        return view('website.home.index', [
            // ১. নিউ অ্যারাইভাল
            'newArrivalProducts' => Product::where('status', 1)->latest()->take(8)->get(),

            // ২. বেস্ট সেলার (সেল থাকলে সেগুলো আগে আসবে, না থাকলে রেন্ডমলি আসবে)
            'bestSellerProducts' => Product::where('status', 1)
                ->orderBy('sales_count', 'desc') // বেশি সেল হওয়া গুলো আগে
                ->inRandomOrder()               // বাকিগুলো রেন্ডমলি
                ->take(8)
                ->get(),

            // ৩. অল প্রোডাক্টস
            'allProducts'        => Product::where('status', 1)->inRandomOrder()->take(12)->get(),

            'brands'             => Brand::all(),
            'categories'         => Category::all(),
        ]);
    }

    public function ajaxProductSearch()
    {
        $searchText = $_GET['search_text'];
        $products = Product::where('status', 1)->where('name', 'like', '%' . $searchText . '%')->latest()->get();
        return response()->json($products);
    }


    // ShopgridController.php

// ... (অন্যান্য use statements) ...

// ...

    public function category(Request $request, $id) // Request ইমপোর্ট করা নিশ্চিত করুন
    {
        // ১. নির্দিষ্ট ক্যাটাগরি এবং ক্যাটাগরি লিস্ট আনা
        $category = Category::findOrFail($id);
        $categories = Category::withCount('products')->get();
        $title = "Category: " . $category->name;

        // ২. প্রোডাক্ট কোয়েরি শুরু করা
        $productsQuery = Product::where('category_id', $id)->where('status', 1);

        // --- ৩. ফিল্টারিং লজিক ---
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $productsQuery->whereBetween('selling_price', [$request->min_price, $request->max_price]);
        }

        if ($request->input('stock_amount') == 1) {
            $productsQuery->where('stock_amount', '>', 0);
        }

        // --- ৪. সর্টিং লজিক ---
        $sortBy = $request->input('sortby', 'created-descending');
        switch ($sortBy) {
            case 'price-ascending': $productsQuery->orderBy('selling_price', 'asc'); break;
            case 'price-descending': $productsQuery->orderBy('selling_price', 'desc'); break;
            case 'title-ascending': $productsQuery->orderBy('name', 'asc'); break;
            case 'title-descending': $productsQuery->orderBy('name', 'desc'); break;
            case 'created-ascending': $productsQuery->orderBy('created_at', 'asc'); break;
            case 'created-descending':
            default: $productsQuery->orderBy('created_at', 'desc'); break;
        }

        $products = $productsQuery->paginate(12)->withQueryString();

        $specialProducts = Product::whereRaw('id % 2 != 0')->inRandomOrder()->take(3)->get();

        return view('website.category.index', [
            'products'          => $products,
            'categories'        => $categories,
            'specialProducts'   => $specialProducts,
            'title'             => $title,
        ]);
    }

    public function subCategory(Request $request, $id)
    {
        // ১. নির্দিষ্ট সাব-ক্যাটাগরি এবং ক্যাটাগরি লিস্ট আনা
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::withCount('products')->get();
        $title = "Sub Category: " . $subCategory->name;

        // ২. প্রোডাক্ট কোয়েরি শুরু করা (sub_category_id দিয়ে ফিল্টার)
        $productsQuery = Product::where('sub_category_id', $id)->where('status', 1);

        // --- ৩. ফিল্টারিং লজিক ---
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $productsQuery->whereBetween('selling_price', [$request->min_price, $request->max_price]);
        }

        if ($request->input('stock_amount') == 1) {
            $productsQuery->where('stock_amount', '>', 0);
        }

        // --- ৪. সর্টিং লজিক ---
        $sortBy = $request->input('sortby', 'created-descending');
        switch ($sortBy) {
            case 'price-ascending': $productsQuery->orderBy('selling_price', 'asc'); break;
            case 'price-descending': $productsQuery->orderBy('selling_price', 'desc'); break;
            case 'title-ascending': $productsQuery->orderBy('name', 'asc'); break;
            case 'title-descending': $productsQuery->orderBy('name', 'desc'); break;
            case 'created-ascending': $productsQuery->orderBy('created_at', 'asc'); break;
            case 'created-descending':
            default: $productsQuery->orderBy('created_at', 'desc'); break;
        }

        $products = $productsQuery->paginate(12)->withQueryString();

        $specialProducts = Product::whereRaw('id % 2 != 0')->inRandomOrder()->take(3)->get();

        return view('website.category.index', [
            'products'          => $products,
            'categories'        => $categories,
            'specialProducts'   => $specialProducts,
            'title'             => $title,
        ]);
    }

    public function productAgeFilter(Request $request, $age)
    {
        // ১. ক্যাটাগরি লিস্ট আনা
        $categories = Category::withCount('products')->get();

        // ২. প্রোডাক্ট কুয়েরি শুরু (অবশ্যই $query বা $productsQuery ব্যবহার করুন)
        $query = Product::where('age', $age)->where('status', 1);

        // ৩. ফিল্টারিং লজিক (দাম)
        if ($request->filled('min_price')) {
            $query->where('selling_price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('selling_price', '<=', $request->max_price);
        }

        // ৪. সর্টিং
        $sort = $request->get('sortby', 'created-descending');
        if ($sort == 'price-ascending') $query->orderBy('selling_price', 'asc');
        elseif ($sort == 'price-descending') $query->orderBy('selling_price', 'desc');
        elseif ($sort == 'title-ascending') $query->orderBy('name', 'asc');
        elseif ($sort == 'title-descending') $query->orderBy('name', 'desc');
        else $query->orderBy('created_at', 'desc');

        // ৫. সমাধান: ডাটা আনা (অবশ্যই paginate)
        $products = $query->paginate(12)->withQueryString();

        $specialProducts = Product::whereRaw('id % 2 != 0')->inRandomOrder()->take(3)->get();

        // সরাসরি Array আকারে ডাটা পাস করুন (compact অনেক সময় ক্যাশ ভ্যালু ধরে ফেলে)
        return view('website.category.index', [
            'products'        => $products,
            'categories'      => $categories,
            'specialProducts' => $specialProducts
        ]);
    }



    public function product($id)
    {
        $product = Product::where('id', $id)
            ->orWhere('slug', $id)
            ->firstOrFail();

        return view('website.product.index', [
            'product' => $product,
            'relatedProducts' => Product::where('category_id', $product->category_id)
                ->where('id', '!=', $product->id)
                ->latest()
                ->take(8)
                ->get(),
        ]);
    }



    public function test()
    {
        return view('website.product.test');
    }
    public function wishlist()
    {
        return view('website.wishlist.wishlist');
    }

    public function addToWishlist($productId)
    {
        if(Session::get('customer_id'))
        {
            if(Wishlist::where('customer_id',Session::get('customer_id'))->where('product_id',$productId)->first())
            {
                return redirect('/customer/wishlist')->with('message','This product already in your wishlist.');
            }
            Wishlist::newWishlist(Session::get('customer_id'),$productId);
            return redirect('/customer/wishlist');
        }
        return redirect('/customer/login')->with('message','After login you can add product to your wishlist.');
    }

    public function buyNow($id)
    {
        $product = Product::find($id);

        // 1. Clear any existing items in the cart (for true "Buy Now" behavior)
        Cart::destroy();

        // 2. Add the specific product to the cart
        Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'qty'       => 1, // Default quantity 1
            'price'     => $product->selling_price,
            'weight'    => 0,
            'options'   => [
                'image' => $product->image,
            ]
        ]);

        if (Session::get('customer_id'))
        {
        $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $this->customer = '';
        }
        return view('website.checkout.buy-now',[
            'product' => Product::find($id),
            'customer'  => $this->customer,
            'total_qty' => Cart::count(),
        ]);
    }


    public function quickview($id)
    {
        $product = Product::find($id); // findOrFail না use করলে AJAX error page দেয়

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $html = view('website.product.quickview_content', compact('product'))->render();

        return response()->json(['html' => $html]);
    }






    public function productsAll(Request $request)
    {
        // ১. ক্যাটাগরি লিস্ট (প্রোডাক্ট কাউন্ট সহ)
        $categories = Category::withCount('products')->get();

        // ২. প্রোডাক্ট কোয়েরি শুরু করা (সব একটিভ প্রোডাক্ট)
        $productsQuery = Product::where('status', 1);

        // --- ৩. ফিল্টারিং লজিক (Filtering Logic) ---

        // দামের রেঞ্জ ফিল্টার (Price Range)
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $productsQuery->whereBetween('selling_price', [$request->min_price, $request->max_price]);
        }

        // স্টক ফিল্টার (Availability)
        if ($request->input('stock_amount') == 1) {
            $productsQuery->where('stock_amount', '>', 0);
        }

        // --- ৪. সর্টিং লজিক (Sorting Logic) ---

        $sortBy = $request->input('sortby', 'created-descending');

        switch ($sortBy) {
            case 'price-ascending':
                $productsQuery->orderBy('selling_price', 'asc');
                break;
            case 'price-descending':
                $productsQuery->orderBy('selling_price', 'desc');
                break;
            case 'title-ascending':
                $productsQuery->orderBy('name', 'asc');
                break;
            case 'title-descending':
                $productsQuery->orderBy('name', 'desc');
                break;
            case 'created-ascending':
                $productsQuery->orderBy('created_at', 'asc');
                break;
            case 'created-descending':
            default:
                $productsQuery->orderBy('created_at', 'desc');
                break;
        }

        // ৫. ফাইনাল ডেটা ফেচ (Pagination সহ ১২টি করে)
        $products = $productsQuery->paginate(12)->withQueryString();

        // মোট প্রোডাক্টের সংখ্যা (ফিল্টার করার পর কতগুলো আছে তা জানার জন্য)
        $totalProducts = $products->total();

        // ৬. স্পেশাল প্রোডাক্টস
        $specialProducts = Product::whereRaw('id % 2 != 0')
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('website.product.products', [
            'products'          => $products,
            'totalProducts'     => $totalProducts,
            'categories'        => $categories,
            'specialProducts'   => $specialProducts,
        ]);
    }





    public function blog()
    {
        return view('website.blog.index');
    }
    public function blog2()
    {
        return view('website.blog.blog2');
    }
    public function blog3()
    {
        return view('website.blog.blog3');
    }
    public function aboutus()
    {
        return view('website.aboutus.aboutus');
    }

    public function payment()
    {
        return view('website.policies.payment');
    }
    public function privacy()
    {
        return view('website.policies.privacy');
    }
    public function refund()
    {
        return view('website.policies.refund');
    }
    public function shipping()
    {
        return view('website.policies.shipping');
    }

    public function condition()
    {
        return view('website.policies.terms');
    }

    public function cookie()
    {
        return view('website.policies.cokkies');
    }
}

