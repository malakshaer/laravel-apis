<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{

    function getUsers(){
        return "HI From a Controller";
    }


    function sayHi($name = "Laravel"){
        $message = "HI " . $name;

        return response()->json([
            "status" => "Success",
            "message" => $message
        ]);
    }

    function addUser(Request $request){
        $name = $request->name;
        $age = $request->age;

        return response()->json([
            "status" => "Success",
            "message" => $age
        ]);
    }
}
