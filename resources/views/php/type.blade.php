<?php
declare(strict_types=1);
?>
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

function sum(float $tmp1, float $tmp2)
{
    var_dump($tmp1, $tmp2);
    echo '<br>';
    return $tmp1 + $tmp2;
}

echo sum(1, 2) . '<br>';
# type juggling
# this will throw an error: sum('a', '2')
echo sum(1.5, 2) . '<br>';
$result = sum(1, 2.5);
var_dump($result);
echo '<br>';

# cast
$score = '37.5';
echo $score . '<br>';
var_dump($score);
echo '<br>';
$score = (int) $score;
echo $score . '<br>';
var_dump($score);
