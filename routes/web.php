<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Str;
use App\Mail\Samplemail;

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

// $info= "hi, I am boy";

// $info=Str::of($info)->ucfirst($info)->replace("Hi","Hello",$info);
// echo $info;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list',[UserController::class,'index']);

Route::get('/add',[UserController::class,'create']);
Route::post('/saveData',[UserController::class,'store']);

Route::get('/delete/{id}',[UserController::class,'destroy']);

Route::get('/edit/{id}',[UserController::class,'show']);

// Route::view('/edit','edit');

Route::post('/edit',[UserController::class,'edit']);


Route::get('/aggregate',[UserController::class,'aggregate']);

Route::get('/joins',[UserController::class,'joins']);

Route::get('/service',[UserController::class,'display']);

Route::get('/relation',[UserController::class,'relation']);

Route::get('/binding/{key:id}',[NewController::class,'binding']);

Route::get('/test',[UserController::class,'test']);

Route::get('/mail',function() {
    return new Samplemail();
});

Route::view('/array','arrayfunction');
 
