<?php

if (!function_exists('prefix')) {
    function prefix(String $prefix, String $string, Int $int) {
        return $prefix . substr($string, $int);
    }
}