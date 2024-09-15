<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    //
    function show(){
        //return redirect()->to('user-home/profile/user');
        return to_route('hm');
    }
    function user(){
        return to_route('user',["name"=>"ayushi"]);
    }
}
