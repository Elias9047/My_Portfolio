<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjcetController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    // banner section
    Route::get('/add_banner',[BannerController::class,'index'])->name('add_banner');
    Route::post('/create_banner',[BannerController::class,'createBanner'])->name('create_banner');
    Route::get('/manage_banner',[BannerController::class,'manageBanner'])->name('manage_banner');
    Route::get('/status-banner/{id}',[BannerController::class,'statusBanner'])->name('status.banner');
    Route::get('/edit-banner/{id}',[BannerController::class,'editBanner'])->name('edit.banner');
    Route::post('/update-banner/',[BannerController::class,'updateBanner'])->name('update.banner');
    Route::post('/delete-banner/',[BannerController::class,'deleteBanner'])->name('delete.banner');
    // About section
    Route::get('/manage-about',[AboutController::class,'index'])->name('manage_about');
    Route::get('/edit-about/{id}',[AboutController::class,'editAbout'])->name('edit_about');
    Route::post('/update_about/',[AboutController::class,'updateAbout'])->name('update_about');
    Route::post('/delete_about/',[AboutController::class,'deleteAbout'])->name('delete_about');
    // Skill section
    Route::get('/add_skill',[SkillController::class,'index'])->name('add_skill');
    Route::post('/create_skill',[SkillController::class,'createSkill'])->name('create_skill');
    Route::get('/manage_skill',[SkillController::class,'manageSkill'])->name('manage_skill');
    Route::get('/edit_skill/{id}',[SkillController::class,'editSkill'])->name('edit_skill');
    Route::post('/update_skill/',[SkillController::class,'updateSkill'])->name('update_skill');
    Route::post('/delete_skill/',[SkillController::class,'deleteSkill'])->name('delete_skill');
    Route::get('/status_skill/{id}',[SkillController::class,'statusSkill'])->name('status_skill');
    // Project section
    Route::get('/add-project',[ProjcetController::class,'index'])->name('add_project');
    Route::post('/create-project',[ProjcetController::class,'createProject'])->name('create_project');
    Route::get('/manage-project',[ProjcetController::class,'manageProject'])->name('manage_project');
    Route::get('/edit-project/{id}',[ProjcetController::class,'editProject'])->name('edit_project');
    Route::post('/update_project/',[ProjcetController::class,'updateProject'])->name('update_project');
    Route::post('/delete-project/',[ProjcetController::class,'deleteProject'])->name('delete_project');
    Route::get('/status-project/{id}',[ProjcetController::class,'statusProject'])->name('status_project');
    //Contact Section
    Route::post('/clientContact',[ContactController::class,'createContact'])->name('clientContact');
    Route::get('/manageContact',[ContactController::class,'manageContact'])->name('manageContact');
    Route::post('/delete_contact/',[ContactController::class,'deleteContact'])->name('delete_contact');
    Route::get('/contact_seen_status/{id}',[ContactController::class,'contactSeenStatus'])->name('contact_seen_status');
    Route::get('/addressContact',[ContactController::class,'addressContact'])->name('addressContact');
    Route::post('/createContactDetails',[ContactController::class,'createContactDetails'])->name('createContactDetails');
    Route::get('/manageAddress',[ContactController::class,'manageAddress'])->name('manageAddress');
    Route::get('/edit_address/{id}',[ContactController::class,'editAddress'])->name('edit_address');
    Route::post('/update_address/',[ContactController::class,'updateAddress'])->name('update_address');
    Route::post('/delete_address/',[ContactController::class,'deleteAddress'])->name('delete_address');




});
