<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',function(){
    return view('welcome');
});

// Route::view('/home','home');
// Route::view('/about','about');

Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about/{user}',[UserController::class,'userAbout']);