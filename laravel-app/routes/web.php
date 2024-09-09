<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user',[UserController::class,'getUser']);
Route::get('userdetail',[UserController::class,'aboutUser']);
Route::get('/user/{name}',[UserController::class,'getUserName']);
Route::get('welcome',[UserController::class,'welcomePage']);
Route::get('admin',[UserController::class,'adminLogin']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::view('/about','about');

Route::get('/contact/{name}',function($name){
    // echo $name;
    return view('contact',['name'=>$name]);
});

Route::get('/signup',function(){
    return view('signup');
});

Route::redirect('/login','/signup');