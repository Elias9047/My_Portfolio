<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.banner.add-banner');
    }

    public function createBanner(Request $request){
        Banner::createBanner($request);
        return redirect( route('manage_banner'));
    }
    public function manageBanner(){
        return view('admin.dashboard.banner.manage-banner',[
            'banners'=> Banner::all()
        ]);
    }

    public function statusBanner($id){
        Banner::statusBanner($id);
        return back();
    }

    public function editBanner($id){
        return view('admin.dashboard.banner.edit-banner',[
            'banner'=>Banner::find($id)
        ]);
    }
    public function updateBanner(Request $request){
        Banner::createBanner($request);
        return redirect( route('manage_banner'));
    }
    public function deleteBanner(Request $request){
        Banner::deleteBanner($request);
        return back();
    }
}
