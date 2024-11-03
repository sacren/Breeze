<x-layout>

<x-slot:title>Integer</x-slot:title>

@php

// integer max, min and size, architecture dependent
echo PHP_INT_MAX . '<br>';
echo PHP_INT_MIN . '<br>';
echo PHP_INT_SIZE . '<br>';

// decimal integer
$number = 28; // 28
echo $number . '<br>';

// hexadecimal integer
$number = 0x2A; // 42
echo $number . '<br>';

// octal integer
$number = 062; // 50
echo $number . '<br>';

// binary integer
$number = 0b1010; // 10
echo $number . '<br>';

// integer overflow
$number = PHP_INT_MAX;
var_dump($number);
echo '<br>';
$number += 1; // promote to float
var_dump($number);
echo '<br>';

// cast boolean to integer
$number = (int) true; // 1
var_dump($number);
echo '<br>';
$number = (int) false; // 0
var_dump($number);
echo '<br>';

// cast decimal to integer
$number = (int) 3.94; // 3
var_dump($number);
echo '<br>';

// cast string to integer
$number = (int) '3.94'; // 3
var_dump($number);
echo '<br>';
$number = (int) 'abc'; // 0
var_dump($number);
echo '<br>';
$number = (int) '32xyz'; // 32
var_dump($number);
echo '<br>';

// cast null to integer
$number = (int) null; // 0
var_dump($number);
echo '<br>';
$number = is_int($number); // integer?
var_dump($number);
echo '<br>';

// improve integer readability
$number = 200_000_000; // 200000000, no error
var_dump($number);
echo '<br>';
$number = '200_000_000'; // 200_000_000 string
var_dump($number);
echo '<br>';
$number = (int) '200_000_000'; // 200
var_dump($number);
echo '<br>';

@endphp

</x-layout>
