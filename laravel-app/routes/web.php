<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserformController;

Route::get('/',function(){
    return view('welcome');
});

// Route::view('/home','home');
// Route::view('/about','about');

Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about/{user}',[UserController::class,'userAbout']);

// Route::get('user-form',function(){
//     return view('user-form');
// });

Route::view('/user-form','user-form');
Route::post('addUser',[UserformController::class, 'addUser']);