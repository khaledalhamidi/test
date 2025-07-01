<?php

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

//here some changes to  make acommit on it 