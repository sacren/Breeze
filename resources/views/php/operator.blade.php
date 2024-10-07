<x-layout></x-layout>
<?php

// arithmetic operators (+, -, *, /, %, **)
$tmp1 = 10;
$tmp2 = 2;
var_dump($tmp1 + $tmp2); // int(12)
echo "<br>";
var_dump($tmp1 - $tmp2); // int(8)
echo "<br>";
var_dump($tmp1 * $tmp2); // int(20)
echo "<br>";
var_dump($tmp1 / $tmp2); // int(5)
echo "<br>";
var_dump($tmp1 % $tmp2); // int(0)
echo "<br>";
var_dump($tmp1 ** $tmp2); // int(100)
echo "<br>";

// +- sign
$tmp1 = -10;
var_dump($tmp1 * $tmp2); // int(-20)
echo "<br>";
var_dump($tmp1 - $tmp2); // int(-12)
echo "<br>";

$tmp1 = '10';
var_dump($tmp1); // string(2) "10"
echo "<br>";
var_dump(+$tmp1); // int(10), the prepended +
echo "<br>";
var_dump(-$tmp1); // int(-10), the prepended -
echo "<br>";
$tmp1 = +'10';
var_dump($tmp1); // int(10)
echo "<br>";

// division
$tmp1 = 10;
$tmp2 = 3;
var_dump($tmp1 / $tmp2); // float(3.3333333333333335)
echo "<br>";
$tmp2 = 2.0;
var_dump($tmp1 / $tmp2); // float(5.0)
echo "<br>";
$tmp2 = 0;
var_dump(fdiv($tmp1, $tmp2)); // float(INF)
echo "<br>";

// modulus
$tmp2 = 3;
var_dump($tmp1 % $tmp2); // int(1)
echo "<br>";
$tmp1 = 10.5;
$tmp2 = 2.9;
var_dump($tmp1 % $tmp2); // int(0)
echo "<br>";
var_dump(fmod($tmp1, $tmp2)); // float(1.8888888888888889)
echo "<br>";
$tmp1 = 10;
$tmp2 = -3;
var_dump($tmp1 % $tmp2); // int(1)
echo "<br>";
$tmp1 = -10;
$tmp2 = 3;
var_dump($tmp1 % $tmp2); // int(-1)
echo "<br>";
