<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    public static $product, $image, $imageUrl, $directory, $imageName;

    // Mass assignable fields
    protected $fillable = [
        'category_id', 'sub_category_id', 'brand_id', 'unit_id',
        'name', 'code', 'stock_amount', 'short_description', 'long_description',
        'image', 'regular_price', 'selling_price', 'meta_title', 'meta_description',
        'status', 'slug', 'age', 'material'
    ];

    // Auto generate slug on creating new product
    protected static function booted()
    {
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name) . '-' . uniqid();
            }
        });
    }

    // Image upload helper
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        $extension = self::$image->getClientOriginalExtension();

        self::$imageName = time() . '-' . uniqid() . '.' . $extension;
        self::$directory = 'admin/assets/images/product-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;

        return self::$imageUrl;
    }

    // Create new product
    public static function newProduct($request)
    {
        $product = new Product();
        self::saveBasicinfo($product, $request, self::getImageUrl($request));
        return $product->id; //
    }

    // Update existing product
    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$product->image)) {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$product->image;
        }

        self::saveBasicinfo(self::$product, $request, self::$imageUrl);
    }

    // Delete product
    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image)) {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    // Save basic info (slug never updated)
    private static function saveBasicinfo($product, $request, $imageUrl)
    {
        $product->category_id       = $request->category_id;
        $product->sub_category_id   = $request->sub_category_id;
        $product->brand_id          = $request->brand_id;
        $product->unit_id           = $request->unit_id;
        $product->age               = $request->age;
        $product->material          = $request->material;
        $product->name              = $request->name;
        // slug removed to prevent overwrite
        $product->code              = $request->code;
        $product->stock_amount      = $request->stock_amount;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;
        $product->image             = $imageUrl;
        $product->regular_price     = $request->regular_price;
        $product->selling_price     = $request->selling_price;
        $product->meta_title        = $request->meta_title;
        $product->meta_description  = $request->meta_description;
        $product->status            = $request->status;
        $product->save();
    }

    // Relations
    public function category() { return $this->belongsTo(Category::class); }
    public function subCategory() { return $this->belongsTo(SubCategory::class); }
    public function brand() { return $this->belongsTo(Brand::class); }
    public function unit() { return $this->belongsTo(Unit::class); }
    public function otherImage() { return $this->hasMany(OtherImage::class); }
}
