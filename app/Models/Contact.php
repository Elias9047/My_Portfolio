<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public static $contact,$delete,$seenStatus,$address;
    public static function clientContact($request){
        self::$contact = new Contact();
        self::$contact->name = $request->name;
        self::$contact->email = $request->email;
        self::$contact->subject = $request->subject;
        self::$contact->message = $request->message;
        self::$contact->save();

    }
//
    public static function deleteContact($request){
        self::$delete = Contact::find($request->delete_id);
        self::$delete->delete();
    }

    public static function seenContact($id){
        self::$seenStatus = Contact::find($id);
        if( self::$seenStatus->status ==0){
            self::$seenStatus->status = 1;
        }else{
            self::$seenStatus->status = 0;
        }
        self::$seenStatus->save();
    }

}
