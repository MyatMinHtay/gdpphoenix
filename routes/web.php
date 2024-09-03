<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Middleware\Logincheck;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $videos = Video::inRandomOrder()->take(3)->get();

    return view('home',[
        'videos' => $videos
    ]);
    
});


Route::get('/about',function(){
    return view('about');
});




Route::post('/login',[AuthController::class,'login']);

Route::get('/admin',[UserController::class,'gologin']);
Route::get('/courses',[VideoController::class,'showcourses']);
Route::get('/courses/details/{video:videoslug}',[VideoController::class,'showdetails']);

Route::middleware([Logincheck::class])->group(function () {

    Route::get('/dashboard',[UserController::class,'godashboard'])->name('dashboard');
    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::post('/admin/users/create', [UserController::class,'createuser']);

    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('/admin/users/edit/{user:username}',[UserController::class,'edituser'])->where('username','[A-Za-z0-9_\-]+');
    Route::post('/admin/users/update/{user:username}',[UserController::class,'updateuser'])->where('username','[A-Za-z0-9_\-]+');
    Route::get('/admin/users/lock/{user:username}',[UserController::class,'lockuser'])->where('username','[A-Za-z0-9_\-]+');
    Route::get('/admin/users/unlock/{user:username}',[UserController::class,'lockuser'])->where('username','[A-Za-z0-9_\-]+');
    

    //video crud
    Route::get('/videos',[VideoController::class,'index'])->name('videos');
    Route::get('/admin/videos/create',[VideoController::class,'createvideo']);
    Route::get('/admin/videos/edit/{video:videoslug}',[VideoController::class,'editvideo']);
    Route::post('/admin/videos/create',[VideoController::class,'storevideo']);
    Route::post('/admin/videos/update/{video:videoslug}',[VideoController::class,'updatevideo']);
    Route::get('/admin/videos/delete/{video:videoslug}',[VideoController::class,'deletevideo']);


    //Category crud
    Route::get('/categories',[CategoryController::class,'index'])->name('categories');
    Route::post('/admin/category/create', [CategoryController::class,'createcategory']);
    Route::post('/admin/category/update/{category:categoryname}', [CategoryController::class,'updatecategory']);
    Route::get('/admin/category/delete/{category:categoryname}', [CategoryController::class,'deletegenre']);


});




