<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public static $courier, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        if ($request->file('logo')) {
            self::$image = $request->file('logo');
            self::$imageName = time() . '-' . self::$image->getClientOriginalName();
            self::$directory = 'admin/assets/images/courier-logo/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        } else {
            return null;
        }
    }

    public static function newCourier($request)
    {
        $courier = new Courier();
        $logoUrl = self::getImageUrl($request);
        self::saveBasicInfo($courier, $request, $logoUrl);
    }

    public static function updateCourier($request, $id)
    {
        self::$courier = Courier::find($id);

        if ($request->file('logo')) {
            if (file_exists(self::$courier->logo)) {
                unlink(self::$courier->logo);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$courier->logo;
        }

        self::saveBasicInfo(self::$courier, $request, self::$imageUrl);
    }

    public static function deleteCourier($id)
    {
        self::$courier = Courier::find($id);
        if (file_exists(self::$courier->logo)) {
            unlink(self::$courier->logo);
        }
        self::$courier->delete();
    }

    private static function saveBasicInfo($courier, $request, $logoUrl)
    {
        $courier->name = $request->name;
        $courier->email = $request->email;
        $courier->address = $request->address;
        $courier->mobile = $request->mobile;
        $courier->tracking_url = $request->tracking_url;
        $courier->logo = $logoUrl;
        $courier->save();
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}

