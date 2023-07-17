<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    private static $skill,$delete_skill,$status_skill;
    public static function createSkill($request){
        if($request->update_skill){
            self::$skill = Skill::find($request->update_skill);
        }else{
            self::$skill =  new Skill();
        }
        self::$skill->skill_name = $request->skill_name;
        self::$skill->last_week = $request->last_week;
        self::$skill->last_month = $request->last_month;
        self::$skill->percent = $request->percent;
        self::$skill->save();
    }

    public static function deleteSkill($request){
        self::$delete_skill = Skill::find($request->delete_id);
        self::$delete_skill->delete();
    }

    public static function statusSkill($id){
        self::$status_skill = Skill::find($id);
        if(self::$status_skill->status == 1){
            self::$status_skill->status = 0;
        }else{
            self::$status_skill->status = 1;
        }
        self::$status_skill->save();
    }
}
