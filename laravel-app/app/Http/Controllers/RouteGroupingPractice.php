<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteGroupingPractice extends Controller
{
    //
    function show(){
        return "User list";
    }
    function add($name){
        return " new user $name";
    }
    function delete(){
        return "user deleted";
    }
}
