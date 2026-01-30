<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public static $subcategory, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image            = $request->file('image');

        if (self::$image && self::$image->isValid())
        {
            self::$imageName        = self::$image->getClientOriginalName();
            self::$directory        = 'admin/assets/images/sub-category-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl         = self::$directory.self::$imageName;
        }
        else
        {
            return self::$imageUrl = null;
        }
        return self::$imageUrl;
    }

    public static function newSubCategory($request)
    {
        self::saveBasicinfo(new subCategory(), $request, self::getImageUrl($request));
    }

    public static function UpdateSubCategory($request)
    {
        self::$subcategory = SubCategory::find($request->id); // 1. যেই SubCategory আপডেট করতে হবে সেটা DB থেকে বের করছি

        if ($request->file('image'))                          // 2. চেক করছি নতুন image দেওয়া হয়েছে কিনা
        {
            if (file_exists(self::$subcategory->image))       // 2.1 পুরোনো image ফাইল আছে কিনা, থাকলে delete করব
            {
                unlink(self::$subcategory->image);            // পুরোনো image মুছে ফেললাম
            }
            self::$imageUrl = self::getImageUrl($request);    // 2.2 নতুন image upload করে URL তৈরি করলাম
        }
        else
        {
            self::$imageUrl = self::$subcategory->image;      // 3. যদি নতুন image না দেওয়া হয় → পুরোনো image URL টা রয়ে যাবে
        }
        self::saveBasicinfo(self::$subcategory, $request, self::$imageUrl); // 4. সবশেষে Basic Info সেভ করব (DB তে update হবে)
    }

    public static function deleteSubCategory($id)
    {
        self::$subcategory = SubCategory::find($id);
        if (file_exists(self::$subcategory->image))
        {
            unlink(self::$subcategory->image);
        }
        self::$subcategory->delete();
    }
    private static function saveBasicinfo($subcategory, $request, $imageUrl)
    {
        $subcategory->category_id       = $request->category_id;
        $subcategory->name              = $request->name;
        $subcategory->description       = $request->description;
        $subcategory->image             = $imageUrl;
        $subcategory->status            = $request->status;
        $subcategory->save();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
