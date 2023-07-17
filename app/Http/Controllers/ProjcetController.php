<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjcetController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.project.add-project');
    }
    public function createProject(Request $request){
        Project::createProject($request);
        return back();
    }


    public function manageProject(){
        return view('admin.dashboard.project.manage-project',[
            'projects'=>Project::all()
        ]);
    }

    public function editProject($id){
        return view('admin.dashboard.project.edit-project',[
            'project'=>Project::find($id)
        ]);
    }

    public function updateProject(Request $request){
        Project::createProject($request);
        return back();
    }

    public function deleteProject(Request $request){
        Project::deleteProject($request);
        return back();
    }
    public function statusProject($id){
        Project::statusProject($id);
        return back();
    }
}
