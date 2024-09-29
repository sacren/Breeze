<x-layout></x-layout>
<?php

$number = 13;
var_dump($number); // int(13)
echo '<br>';
var_dump((float) $number); // float(13), float type yet not a decimal number
echo '<br>';

$number = 'abc';
var_dump((float) $number); // float(0)
echo '<br>';

$number = '13.5abc';
var_dump((float) $number); // float(13.5)
echo '<br>';

$number = 13.5;
var_dump($number); // float(13.5)
echo '<br>';

$number = 13_000.5;
var_dump($number); // float(13000.5)
echo '<br>';

$number = 13.5e3;
var_dump($number); // float(13500), float type yet not a decimal number
echo '<br>';

$number = 13.5e-3;
var_dump($number); // float(0.0135)
echo '<br>';

// predefined float constants
$number = PHP_FLOAT_MAX;
echo $number . '<br>';

$number = PHP_FLOAT_MIN;
echo $number . '<br>';

// float is approximate, never compare
$number = (0.1 + 0.7) * 10; // 7.9999999999999999
echo $number . '<br>'; // 8
echo floor($number) . '<br>'; // 7

$number = (0.1 + 0.2) * 10; // 3.0000000000000004
echo $number . '<br>'; // 3
echo ceil($number) . '<br>'; // 4

// NAN
$number = NAN;
var_dump($number); // float(NAN)
echo '<br>';
echo $number . '<br>'; // NAN
$number = log(-1);
var_dump($number); // float(NAN)
echo '<br>';
echo $number . '<br>'; // NAN
var_dump(is_nan($number)); // bool(true)
echo '<br>';
var_dump(is_infinite($number)); // bool(false)
echo '<br>';
var_dump(is_finite($number)); // bool(false)
echo '<br>';

// INF
$number = INF;
var_dump($number); // float(INF)
echo '<br>';
echo $number . '<br>'; // INF
$number = PHP_FLOAT_MAX + PHP_FLOAT_MAX;
var_dump($number); // float(INF)
echo '<br>';
echo $number . '<br>'; // INF
var_dump(is_infinite($number)); // bool(true)
echo '<br>';
var_dump(is_finite($number)); // bool(false)
echo '<br>';
var_dump(is_nan($number)); // bool(false)
echo '<br>';
