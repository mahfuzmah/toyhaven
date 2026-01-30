<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    protected $fillable = [
        'customer_id',
        'product_id',
    ];

    public static $wishlist;

    

    public static function newWishlist($customerId,$productId)
    {
        self::saveBasicinfo(new Wishlist(), $customerId,$productId);
    }
    public static function UpdateWishlist($request, $customerId, $productId)
    {
        self::$wishlist = Wishlist::find($request->id);
        self::saveBasicinfo(self::$wishlist, $customerId, $productId);

    }
    public static function deleteWishlist($id)
    {
        self::$wishlist = Wishlist::find($id);
        self::$wishlist->delete();
    }
    private static function saveBasicinfo($wishlist, $customerId, $productId)
    {
        $wishlist->customer_id  = $customerId;
        $wishlist->product_id   = $productId;
        $wishlist->save();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
