<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function getFromUser(){
        return "Hello World!";
    }

    function upload()
    {
        return ["result" => "pass"];
    }
}
