<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome',function(){
//     return view('welcome');
// });

// Route::view('/welcome','welcome');

// Route::get('/welcome/{name}',function($name){
//     return view('welcome',["name"=>$name]);
// });

// Route::view('/welcome','welcome');

// Route::redirect('/','/welcome');

// Route::get('user',[UserController::class,'getUser']);

// Route::get('/about/{name}',[UserController::class,'aboutUser']);

// Route::get('/welcome',[UserController::class,'welcome']);

//Route::get('/welcomeUser/{name}',[UserController::class,'welcomeUser']);

Route::view('/alogin','admin.login');