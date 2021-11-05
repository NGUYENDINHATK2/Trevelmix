<?php

use App\Http\Controllers\Auth\admincontroller;

use App\Http\Controllers\UploadImgDrive;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/offers', function () {
    return view('offers');
});




Route::get('admin', [admincontroller::class,'index'])->middleware('auth');
Route::get('admin/tour', [admincontroller::class,'tour'])->middleware('auth');
Route::get('admin/listtour', [admincontroller::class,'listtour'])->middleware('auth');

//->middleware('auth')

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/upfile', function () {
    return view('Welcome');
});

Route::post('/upload', function (Request $request) {
   

    $upimg=new UploadImgDrive();
    return   $upimg->save($request->thing);

});