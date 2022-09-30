<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortAPI extends Controller
{

    public function getSortedString($str)
    {
        $lowerCase = "";
        $upperCase = "";
        $nb = "";
        $res = "";

        for($i=0;$i < strlen($str);$i++){
            if(ctype_upper($str[$i]))
            {
                $upperCase = $upperCase.$str[$i];
            }
            else if(ctype_lower($str[$i]))
            {
                $lowerCase = $lowerCase.$str[$i];
            }
            else
            {
                $nb = $nb.$str[$i];
            }
        }

        $arrLower = sortArray($lowerCase);
        $arrUpper = sortArray($upperCase);
        $arrNumber = sortArray($nb);

        $array = array();

        for ($i = 0; $i < count($lowerCase); $i++)
        { 
            $array[$lowerCase[$i]] = ord($lowerCaseA[$i]);
        }
        for ($m=0; $m < count($upperCase); $m++)
        { 
            $array[$upperCase[$m]] = ord($upperCase[$m]);
        }
        asort($array);

        foreach ($array as $index => $value) {
            $res = $res.$index;
        }

        $res = $res.implode($nb);
        
        return response()->json([
            $res
        ]);

    }
    function sortArray($str) {
        $array = str_split($str);
        sort($array);
        return $array;
    }
}
