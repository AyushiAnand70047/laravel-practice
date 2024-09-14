<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserformController extends Controller
{
    //
    function addUser(Request $request){
        echo "Add user controller is called <br/>";
        echo $request->username . "<br/>";
        echo $request->useremail . "<br/>";
        echo $request->usercity . "<br/>";
        // return $request;
    }
}
