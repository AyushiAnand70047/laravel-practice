<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserformController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\RouteGroupingPractice;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/home','home');
// Route::view('/about','about');

Route::get('user-home', [UserController::class, 'userHome']);
Route::get('user-about/{user}', [UserController::class, 'userAbout']);

// Route::get('user-form',function(){
//     return view('user-form');
// });

Route::view('/user-form', 'user-form');
Route::post('addUser', [UserformController::class, 'addUser']);

Route::view('user-home/profile/user', 'user-home')->name('hm');
Route::get('show', [UserHomeController::class, 'show']);

Route::view('user-home/profile/{name}', 'user-home')->name('user');
Route::get('user', [UserHomeController::class, 'user']);

// Route::view('user/practice', 'route-grouping-practice');
// Route::get('user/show', [RouteGroupingPractice::class, 'show']);
// Route::get('user/add', [RouteGroupingPractice::class, 'add']);

Route::prefix('user')->group(function () {
    Route::view('/practice', 'route-grouping-practice');
    Route::get('/show', [RouteGroupingPractice::class, 'show']);
    Route::get('/add', [RouteGroupingPractice::class, 'add']);
});