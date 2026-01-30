<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model

{
    public static $unit;

    public static function newUnit($request)
    {
        self::saveBasicinfo(new Unit(), $request);
    }
    public static function UpdateUnit($request)
    {
        self::$unit = Unit::find($request->id);
        self::saveBasicinfo(self::$unit, $request);
    }
    public static function deleteUnit($id)
    {
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }
    private static function saveBasicInfo($unit, $request)
    {
        $unit->name           = $request->name;
        $unit->description    = $request->description;
        $unit->status         = $request->status;
        $unit->save();
    }
}
