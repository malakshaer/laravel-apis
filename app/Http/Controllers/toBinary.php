<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToBinary extends Controller
{
    function toBinary($str){
        
        $int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
        $res = decbin($int);
        
        return response()->json([
            $str. $res
        ]);
        
    }
}
