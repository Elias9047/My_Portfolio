<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    private static $about,$image,$imageNewName,$directory,$urlImg,$delete;
    public static function updateAbout($request){;
        self::$about = About::find($request->update_about);
        self::$about->name = $request->name;
        self::$about->date_of_birth = $request->date_of_birth;
        self::$about->description = $request->description;
        self::$about->email = $request->email;
        self::$about->phone = $request->phone;
        self::$about->address = $request->address;
        self::$about->image = self::saveImage($request);
        self::$about->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->Extension();
        self::$directory = "adminAsset/about_image/";
        self::$urlImg = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName );
        return self::$urlImg;
    }

    private static $delete_about;
    public static function deleteAbout($request){
        self::$delete_about = About::find($request->delete_id);
        self::$delete_about->delete();
    }
}
