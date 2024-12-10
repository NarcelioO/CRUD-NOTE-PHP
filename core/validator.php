<?php

namespace Core;
class Validator{

    //pure fuction 
    public static function string($value, $min = 1, $max = INF){

            return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;

    }

    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}



?>