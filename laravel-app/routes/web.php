<?php

use Illuminate\Support\Facades\Route;

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