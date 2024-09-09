<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Ayushi Anand";
    }
    function aboutUser(){
        return "I am Ayushi";
    }
    function getUserName($name){
        return "Hello ".$name;
    }
    function welcomePage(){
        return view('welcome');
    }
    function adminLogin(){
        return view('admin.login');
    }
}
