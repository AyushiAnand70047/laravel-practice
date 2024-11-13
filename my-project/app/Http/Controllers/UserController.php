<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "This is Ayushi";
    }
    function aboutUser($name){
        return "Hello $name";
    }
    function welcome(){
        return view('welcome');
    }
    function welcomeUser($name){
        return view('welcome',["name"=>$name]);
    }
}
