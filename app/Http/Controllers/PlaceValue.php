<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceValue extends Controller
{
    function getPlaceValue($n = "1230"){
        $u = $n%10;
        $t = ($n/10)%10;
        $h = ($n/100)%10;
        $th = ($n/1000)%10;

        return response()->json([
            $th*1000,$h*100,$t*10,$u
        ]);
    }
}
