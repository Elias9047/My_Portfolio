<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    private static $project,$image,$imageNewName,$directory,$urlImg,$delete,$status;
    public static function createProject($request){
        if($request->update_project){
            self::$project = Project::find($request->update_project);
        }else{
            self::$project = new Project();
        }
        self::$project->project_name = $request->project_name;
        self::$project->project_title = $request->project_title;
        self::$project->image = self::saveImage($request);
        self::$project->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->Extension();
        self::$directory = "adminAsset/project_image/";
        self::$urlImg = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName );
        return self::$urlImg;
    }
    public static function deleteProject($request){
        self::$project = Project::find($request->delete_id);
        self::$project->delete();
    }

    public static function statusProject($id){
        self::$status = Project::find($id);
        if(self::$status->status == 1){
            self::$status->status = 0;
        }else{
            self::$status->status = 1;
        }
        self::$status->save();
    }
}
