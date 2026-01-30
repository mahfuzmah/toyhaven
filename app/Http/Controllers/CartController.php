<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('website.cart.index',[
            'cart_products' => Cart::content(),
            'total_qty'     => Cart::count(),
            'products'      => Product::latest()->take(8)->get(),
        ]);
    }

    public function add(Request $request)
    {
        $product = Product::find($request->id);
        Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'qty'       => $request->quantity,
            'price'     => $product->selling_price,
            'weight'    => 0,
            'options'   => [
                'image' => $product->image,

            ]
        ]);

        return redirect('/cart/index');
    }

    public function buyNow(Request $request)
    {
        $product = Product::find($request->id);

        Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'qty'       => $request->quantity ?? 1,
            'price'     => $product->selling_price,
            'weight'    => 0,
            'options'   => [
                'image' => $product->image,
            ]
        ]);

        // Redirect directly to checkout
        return redirect()->route('checkout.index');
    }
    public function buyNowModal(Request $request)
    {
        $product = Product::find($request->id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found']);
        }

        // 🔹 আগের cart clear করে শুধু এই পণ্য রাখো
        \Cart::clear();

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity ?? 1,
            'attributes' => [],
            'options' => [
                'image' => $product->image ?? null
            ]
        ]);

        return response()->json(['success' => true]);
    }


    public function ajaxAddToCart(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);

        $cartItem = Cart::content()->firstWhere('id', $product->id);

        $image = null;
        if(isset($product->image)) {
            if(is_array($product->image) && count($product->image) > 0){
                $image = asset('storage/' . $product->image[0]);
            } else {
                $image = asset('storage/' . $product->image);
            }
        } else {
            $image = asset('storage/default.png');
        }

        if ($cartItem) {
            Cart::update($cartItem->rowId, $cartItem->qty + 1);
        } else {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->selling_price,
                'weight' => 0,
                'options' => [
                    'image' => $product->image
                        ? (is_array($product->image) ? $product->image[0] : $product->image)
                        : 'assets/default.png',
                ]
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart!',
            'cartContent' => Cart::content(),
            'cartCount' => Cart::count(),
            'cartTotal' => Cart::subtotal()
        ]);
    }

    public function update(Request $request)
    {
        Cart::update($request->rowId, ['qty' => $request->quantity]);
        return back()->with('message', 'Cart product info update.');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);;
        return back()->with('message', 'Cart product info removed.');
    }

    public function clear()
    {
        Cart::destroy(); // Laravel Cart package-এর সব item মুছে দেয়
        return redirect()->back()->with('success', 'All items have been removed from your cart!');
    }

}
