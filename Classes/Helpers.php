<?php

//require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
//
//$dotenv = new Dotenv\Dotenv(__DIR__);
//$dotenv->load();

class Helpers {

    public function url($str) {

//        return getenv('BASE_URL') . $str;

        return '//fairwayford.local:8080/' . $str;
    }

    public function root($str) {

        return $_SERVER['DOCUMENT_ROOT'] . '/' . $str;
//        return $_SERVER['DOCUMENT_ROOT'] . getenv('ROOT_DIR') . $str;
    }

    public function isOdd($i) {

        return ($i % 2 != 0);
    }
}