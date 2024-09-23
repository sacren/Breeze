<x-layout></x-layout>
<?php

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
