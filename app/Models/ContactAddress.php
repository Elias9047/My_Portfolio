<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{
    use HasFactory;
    public static $address;
    public static function contactAddress($request){
        if($request->update_about){
            self::$address = ContactAddress::find($request->update_about);
        }else{
            self::$address = new ContactAddress();
        }
        self::$address->address = $request->address;
        self::$address->phone = $request->phone;
        self::$address->email = $request->email;
        self::$address->website = $request->website;
        self::$address->save();
    }

    public static function deleteAddress($request){
        ContactAddress::find($request->delete_id)->delete();
    }
}
