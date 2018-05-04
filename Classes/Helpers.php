<?php

class Helpers {

    private $baseHref = '//fairwayford.local:8080/';

    public function url($str) {

        return $this->baseHref . $str;
    }

    public function root($str) {

        return $_SERVER['DOCUMENT_ROOT'] . '/' . $str;
    }

    public function isOdd($i) {

        return ($i % 2 != 0);
    }
}