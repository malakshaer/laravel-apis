<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathExpression extends Controller
{

    function getExpression($operation = "+",$n1 = 2,$n2 = 5){
        switch($operation){
            case "+":
                $res = $n1 + $n2;
                break;
            case "-":
                $res = $n1 - $n2;
                break;
            case "*": 
                $res = $n1 * $n2;
                break;   
            case "/":
                $res = $n1/$n2;
                break;    
        }

        return response()->json([
            $res
        ]);
    }
}
