<?php

namespace App\Http\Controllers;

use App\Models\ContactAddress;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\About;
use App\Models\Project;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontEnd.welcome',[
            'banners' => Banner::where('status',1)->get(),
            'abouts'=> About::all(),
            'skills'=>Skill::where('status',1)->get(),
            'projects'=>Project::where('status',1)->get(),
            'addresses'=>ContactAddress::all()
        ]);
    }
}
