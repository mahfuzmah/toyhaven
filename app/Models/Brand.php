<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public static $brand, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image            = $request->file('image');
        self::$imageName        = self::$image->getClientOriginalName();
        self::$directory        = 'admin/assets/images/brand-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl         = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newBrand($request)
    {
        self::saveBasicinfo(new Brand(), $request, self::getImageUrl($request));
    }
    public static function UpdateBrand($request)
    {
        self::$brand = Brand::find($request->id);

        if ($request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$brand->image;
        }
        self::saveBasicinfo(self::$brand, $request, self::$imageUrl);

    }
    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
    private static function saveBasicinfo($brand, $request, $imageUrl)
    {
        $brand->name           = $request->name;
        $brand->description    = $request->description;
        $brand->image          = $imageUrl;
        $brand->status         = $request->status;
        $brand->save();
    }
}
