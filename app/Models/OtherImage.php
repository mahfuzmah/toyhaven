<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    public static $otherImage, $otherImages, $imageUrl, $image, $imageName, $directory;

    public static function newOtherImage($images, $productId)
    {
         if (empty($images)) {
        return; // No other image provided, so skip
    }
        foreach ($images as $image)
        {
            // আগের নাম না নিয়ে time() দিয়ে rename করা হচ্ছে
            $extension = $image->getClientOriginalExtension();
            self::$imageName = time() . '-' . uniqid() . '.' . $extension; // ইউনিক নাম
            self::$directory = 'admin/assets/images/product-other-images/';
            $image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;

            self::$otherImage = new OtherImage();
            self::$otherImage->product_id = $productId;
            self::$otherImage->image = self::$imageUrl;
            self::$otherImage->save();
        }
    }

    public static function deleteOtherImage($productId)
    {
        self::$otherImages = OtherImage::where('product_id', $productId)->get();
        foreach (self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
    }

    public static function updateOtherImage($images, $productId)
    {
        self::deleteOtherImage($productId);
        self::newOtherImage($images, $productId);
    }
}

