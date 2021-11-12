<?php

use App\Http\Controllers\Api\Userapi;
use App\Http\Controllers\Api\TourApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('admin', Userapi::class)->middleware('auth');;

Route::resource('tour', TourApi::class)->middleware('auth');;
