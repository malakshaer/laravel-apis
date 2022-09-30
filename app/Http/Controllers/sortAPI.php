<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortAPI extends Controller
{

    public function getSortedString($str = "eA2a1E"){
        
        $outputChar = preg_replace('/[^a-z]/', '', $str);
        $arr1 = str_split($outputChar);
        print_r($arr1);
        $res1 = sort($arr1);
        

        $outputChar = preg_replace('/[^A-Z]/', '', $str);
        $arr2 = str_split($outputChar);
        print_r($arr2);
        $res2 = sort($arr2);


        $outputNumber = preg_replace('/[^0-9]/', '', $str);
        $arr3 = str_split($outputNumber);
        print_r($arr3);
        $res3 = sort($arr3);
        

        return response()->json([
            $res = $res1.$res2.$res3
        ]);

    }
}
