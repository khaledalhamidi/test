<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('welcome',function(){
//     return 'hello dear ';
// });
// to use controller to 
Route::get('welcome',[WelcomeController::class,'welcome']);
Route::get('user',[UserController::class,'index']);
// to insert into table 
route::post('tasks',[TaskController::class,'store']);
//return all value from DB
route::get('tasks',[TaskController::class,'index']);
//updates data  from DB
route::put('tasks/{id}',[TaskController::class,'update']);
//display some users
route::get('tasks/{id}',[TaskController::class,'show']);
//delete items 
route::delete ('tasks/{id}',[TaskController::class,'destroy']);