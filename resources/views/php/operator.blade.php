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

// assignment operators
$tmp1 = $tmp2 = 10;
var_dump($tmp1, $tmp2); // int(10) int(10)
echo "<br>";

$tmp1 += $tmp2;
echo $tmp1 . "<br>"; // 20
$tmp1 -= $tmp2;
echo $tmp1 . "<br>"; // 10
$tmp1 *= $tmp2;
echo $tmp1 . "<br>"; // 100
$tmp1 /= $tmp2;
echo $tmp1 . "<br>"; // 10

// string concatenation
$tmp1 = 'Hello';
$tmp1 .= ' world';
echo $tmp1 . "<br>";

// comparison operators
$tmp1 = 5;
$tmp2 = 3;
var_dump($tmp1 == $tmp2); // bool(false), type conversion
echo "<br>";
var_dump($tmp1 === $tmp2); // bool(false), compare type and value
echo "<br>";

$tmp2 = '5';
var_dump($tmp1 == $tmp2); // bool(true)
echo "<br>";
var_dump($tmp1 === $tmp2); // bool(false)
echo "<br>";
var_dump($tmp1 != $tmp2); // bool(false)
echo "<br>";
var_dump($tmp1 !== $tmp2); // bool(true)
echo "<br>";
var_dump($tmp1 <> $tmp2); // bool(false)
echo "<br>";

$tmp2 = 10;
var_dump($tmp1 < $tmp2); // bool(true)
echo "<br>";
var_dump($tmp1 > $tmp2); // bool(false)
echo "<br>";
var_dump($tmp1 <= $tmp2); // bool(true)
echo "<br>";
var_dump($tmp1 >= $tmp2); // bool(false)
echo "<br>";

// spaceship operator
$tmp1 = 10;
$tmp2 = 5;
var_dump($tmp1 <=> $tmp2); // int(1)
echo "<br>";
$tmp2 = 10;
var_dump($tmp1 <=> $tmp2); // int(0)
echo "<br>";
$tmp2 = 20;
var_dump($tmp1 <=> $tmp2); // int(-1)
echo "<br>";
$tmp2 = '10';
var_dump($tmp1 <=> $tmp2); // int(0)
echo "<br>";

// use strict type for comparison
$tmp1 = 'Hello';
$tmp2 = strpos($tmp1, 'H');

if ($tmp2 === false) { // wrong: $tmp2 == false
    echo 'Not found';
} else {
    echo 'Found at position ' . $tmp2;
}
echo "<br>";

// ternary operator
$result = $tmp2 === false ? 'Not found' : 'Found at position ' . $tmp2;
echo $result . "<br>";

// null coalescing operator
$tmp1 = null;
$tmp2 = $tmp1 ?? 'default';
var_dump($tmp2); // string(7) "default"
echo "<br>";
$tmp1 = false;
$tmp2 = $tmp1 ?? 'default';
var_dump($tmp2); // bool(false)
echo "<br>";
$tmp2 = $tmp3 ?? 'default';
var_dump($tmp2); // string(7) "default"
echo "<br>";
