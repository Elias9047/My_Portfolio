<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.about.manage-about',[
            'abouts'=>About::all()
        ]);
    }

    public function editAbout($id){
        return view('admin.dashboard.about.edit-about',[
            'about'=>About::find($id)
        ]);
    }

    public function updateAbout(Request $request){
        About::updateAbout($request);
        return back();
    }

    public function deleteAbout(Request $request){
        About::deleteAbout($request);
        return back();
    }
}
