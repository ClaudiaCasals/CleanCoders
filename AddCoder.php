<?php
namespace App;


final class AddCoder{

    function addName($coders) {

        $new = 'Diego';
        array_push($coders, "$new");
        $coders = array_values(array_unique($coders));
        print_r($coders);

    }

}