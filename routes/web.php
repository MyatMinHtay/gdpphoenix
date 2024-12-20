<?php

use App\Models\User;
use App\Models\Video;
use App\Models\VideoCategory;
use App\Http\Middleware\Logincheck;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

Route::get('/', function () {

    $videos = Video::inRandomOrder()->take(3)->get();

    return view('home',[
        'videos' => $videos
    ]);
    
});

Route::get('/sitemap',function(){
  

    // Retrieve active properties, ordered by ID in descending order
    $videos = Video::orderBy('id', 'desc')->get();
    $categories = Category::all();


    // Return the XML response, passing posts, blogs, and model data to the sitemap view
    return response()->view('sitemap', compact('videos','categories'))
                     ->header('Content-Type', 'text/xml');

});


Route::get('/about',function(){
    return view('about');
});

Route::get('/jobs',function(){
    return view('gotolivechat');
});

Route::get('/research',function(){
    return view('gotolivechat');
});

Route::get('/donate',function(){
    return view('donate');
});

Route::get('/community',function(){
    return view('gotolivechat');
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
    Route::get('/admin/users/unlock/{user:username}',[UserController::class,'unlockuser'])->where('username','[A-Za-z0-9_\-]+');
    

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




