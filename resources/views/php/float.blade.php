<x-layout></x-layout>
<?php

$number = 13; // 13, int type
var_dump($number);
echo '<br>';

$number = 13.5; // 13.5, float type
var_dump($number);
echo '<br>';

$number = 13_000.5; // 13000.5, better readability
var_dump($number);
echo '<br>';

$number = 13.5e3; // 13500
var_dump($number); // float type without decimal point
echo '<br>';

$number = 13.5e-3; // 0.0135
var_dump($number);
echo '<br>';

// predefined float constants
$number = PHP_FLOAT_MAX;
echo $number . '<br>';

$number = PHP_FLOAT_MIN;
echo $number . '<br>';
