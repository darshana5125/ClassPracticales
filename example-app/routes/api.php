<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TestController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('testroute',[ExampleController::class,'firstfunc']);

Route::get('testroute3',[ExampleController::class,'getsum']);

Route::get('xxx',[ExampleController::class,'getsumtwo']);

Route::get('yyy',[ExampleController::class,'returnObject']);

Route::get('condition',[ExampleController::class,'returnCondidtion']);


Route::post('testroutewithpayload',[ExampleController::class,'getsumwithpayload']);

Route::get('oop',[ExampleController::class,'inheritanceOOP']);

Route::get('function2',[ExampleController::class,'function2']);

Route::get('function3',[ExampleController::class,'function3']);

Route::get('helper',[ExampleController::class,'returnhelper']);

Route::get('helper2',[ExampleController::class,'returnhelper2']);



Route::post('adddata',[TestController::class,'store']);

Route::get('getdata',[TestController::class,'index']);


//Route::get('user',[UserController::class,'user']);
