<?php

namespace App;

final class Killer
{

    function unset($selected,$coders)   {

        $crypt= array();

        if(!(in_array($selected,$coders))){
            echo "User not found";
            return "Coder not found";
        }

        array_push($crypt, $selected);
        unset($coders[array_search($selected,$coders)]);


    }
}
