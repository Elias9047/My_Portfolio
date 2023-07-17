<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    private static $banner,$image,$imageNewName,$directory,$urlImg,$delete;
    public static function createBanner($request){
        if($request->update_banner){
            self::$banner = Banner::find($request->update_banner);
        }else{
            self::$banner = new Banner();
        }
        self::$banner->sub_title = $request->sub_title;
        self::$banner->title = $request->title;
        self::$banner->image = self::saveImage($request);
        self::$banner->save();
    }
    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->Extension();
        self::$directory = "adminAsset/banner_immage/";
        self::$urlImg = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName );
        return self::$urlImg;
    }

    public static function statusBanner($id){
        self::$banner = Banner::find($id);
        if(self::$banner->status == 1){
            self::$banner->status = 0;
        }else{
            self::$banner->status = 1;
        }
        self::$banner->save();
    }
    public static function deleteBanner($request){
        self::$delete = Banner::find($request->delete_id);
        self::$delete->delete();
    }
}
