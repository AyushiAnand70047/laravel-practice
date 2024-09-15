<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserformController extends Controller
{
    //
    function addUser(Request $request){

        $request->validate([
            "username"=>"required | min: 3 | max: 15",
            "useremail"=>"required | email",
            "usercity"=>"required",
            "skill"=>"required"
        ],[
            'username.required'=>'name can not be empty',
            'username.max'=>'name can not be greater than 15 characters',
            'useremail.email'=>'email is not correct'
        ]);

        echo "Add user controller is called <br/>";
        echo $request->username . "<br/>";
        echo $request->useremail . "<br/>";
        echo $request->usercity . "<br/>";
        // echo $request->skill . "<br/>";
        print_r($request->skill);
        echo "<br/>";
        echo $request->gender . "<br/>";
        echo $request->city . "<br/>";
        echo $request->age . "<br/>";
        //return $request;
    }
}
