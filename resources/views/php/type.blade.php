<x-layout></x-layout>
<?php

# scalar types
# boolean
# integer
# float
# string
$completed = true; // 1
$inProgress = false; // blank
$score = 100;
$price = 0.99;
$greeting = 'Hello';

echo $completed . '<br>';
echo $inProgress . '<br>';
echo $score . '<br>';
echo $price . '<br>';
echo $greeting . '<br>';

echo gettype($completed) . '<br>';
echo gettype($score) . '<br>';
echo gettype($price) . '<br>';
echo gettype($greeting) . '<br>';

var_dump($completed);
echo '<br>';
var_dump($score);
echo '<br>';
var_dump($price);
echo '<br>';
var_dump($greeting);
echo '<br>';

# compound types
# array
# echo $companies; this will throw an error
# object
# callable
# iterable
$companies = [1, 2, 3, -4, 0.5, 'Laravel'];
print_r($companies);
echo '<br>';
echo gettype($companies) . '<br>';
var_dump($companies);
echo '<br>';

# special types
# resource
# null
