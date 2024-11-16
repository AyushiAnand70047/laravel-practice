<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //

    function addUser(Request $req){
        // echo $req->username;
        // echo $req->input('username');
        print_r($req->skill);
        return  $req;
    }


    // function getUser(){
    //     return "This is Ayushi";
    // }
    // function aboutUser($name){
    //     return "Hello $name";
    // }
    // function welcome(){
    //     return view('welcome');
    // }
    // function welcomeUser($name){
    //     return view('welcome',["name"=>$name]);
    // }
    // function userHome(){
    //     if(View::exists('home')){
    //         $name = "Tauqueer";
    //         $users = ['Tauqueer','Ayushi','Alam','Anand'];
    //         return view('home',["name"=> $name,"users"=>$users]);
    //     }
    //     else{
    //         return "View not found";
    //     }
    // }
}
