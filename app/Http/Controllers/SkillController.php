<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.skill.add-skill');
    }
    public static function createSkill(Request $request){
        Skill::createSkill($request);
        return back();
    }

    public function manageSkill(){
        return view('admin.dashboard.skill.manage-skill',[
            'skills'=>Skill::all()
        ]);
    }

    public function editSkill($id){
        return view('admin.dashboard.skill.edit-skill',[
            'skill' => Skill::find($id)
        ]);
    }

    public function updateSkill(Request $request){
        Skill::createSkill($request);
        return back();
    }
    public function deleteSkill(Request $request){
        Skill::deleteSkill($request);
        return back();
    }
    public function statusSkill($id){
        Skill::statusSkill($id);
        return back();
    }
}
