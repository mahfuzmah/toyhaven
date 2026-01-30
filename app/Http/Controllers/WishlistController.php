<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Session;

class WishlistController extends Controller
{

    public function index()
    {
        // Get customer_id from request or session
        $customer_id = Session::get('customer_id');

        if (!$customer_id) {
            return redirect()->back()->with('error', 'Customer ID is required.');
        }

        // Fetch wishlist items with products


        // Return the view
        return view('website.wishlist.wishlist', [
            'wishlists' => Wishlist::with('product')
                ->where('customer_id', $customer_id)
                ->latest()
                ->get()
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $customerId = Session::get('customer_id');

        if (!$customerId) {
            return response()->json(['error' => 'Please login first.'], 401);
        }

        // Check if product already exists in wishlist
        $exists = Wishlist::where('customer_id', $customerId)
            ->where('product_id', $request->product_id)
            ->exists();

        if ($exists) {
            return redirect()->back()->with('info', 'This product is already in your wishlist.');
        }

        Wishlist::create([
            'customer_id' => $customerId,
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist successfully.');
    }




    public function delete($id)
    {
        $wishlistItem = Wishlist::where('customer_id', Session::get('customer_id'))
            ->where('id', $id)
            ->firstOrFail();

        $wishlistItem->delete();

        return back()->with('error', 'Product removed from your wishlist.');
    }

}
