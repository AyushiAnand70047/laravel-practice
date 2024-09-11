<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    function userHome(){
        $users = ['Ayushi','Anand','Tauqueer'];
        return view('home',["users"=>$users]);
    }
    function userAbout($name){
        if(View::exists('about')){
            return view('about',['user'=>$name]);
        }
        else{
            echo "view not found";
        }
    }
}
