<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $category, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');

        // যদি image থাকে এবং valid হয়
        if (self::$image && self::$image->isValid()) {
            self::$imageName  = self::$image->getClientOriginalName();
            self::$directory  = 'admin/assets/images/category-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl   = self::$directory . self::$imageName;
        }
        else
        {
            // যদি image না থাকে
            self::$imageUrl = null;
        }

        return self::$imageUrl;
    }

    public static function newCategory($request)
    {
        self::saveBasicinfo(new Category(), $request, self::getImageUrl($request));
    }
    public static function UpdateCategory($request)
    {
        self::$category = Category::find($request->id);

        if ($request->file('image'))
        {
            if (file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::saveBasicinfo(self::$category, $request, self::$imageUrl);

    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
    private static function saveBasicinfo($category, $request, $imageUrl)
    {
        $category->name           = $request->name;
        $category->description    = $request->description;
        $category->image          = $imageUrl;
        $category->status         = $request->status;
        $category->save();
    }
    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
