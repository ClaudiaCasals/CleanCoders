<?php
namespace App;


final class RestartCodersList {

    function restartList($crypt) {

        $coders = ['Diego','Magali'];
        $crypt = ['Ana','Claudia'];
        $coders = array_merge($coders, $crypt);
        $crypt = [];

        return $crypt;
    }
}