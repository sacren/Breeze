<x-layout></x-layout>

<?php

$name = "Sebastian";
$fruits = ["apple", "banana", "orange"];

print_r($name);

echo '<pre>';
print_r($fruits);
echo '</pre>';

echo $fruits[0] . "<br>"; // apple
echo $name[0] . "<br>"; // S
echo $name[-1] . "<br>"; // n, fine with string
// $fruits[-1] throws an error
// $fruits[3] out of bounds, throws an error
// to prevent this, use isset() or empty()
var_dump(isset($fruits[3])); // bool(false)
echo '<br>';
var_dump(empty($fruits[3])); // bool(true)
echo '<br>';

// update
$fruits[0] = "pineapple";
echo $fruits[0] . "<br>"; // pineapple
var_dump($fruits); // array(3) { [0]=> string(9) "pineapple" [1]=> string(6) "banana" [2]=> string(6) "orange" }
echo '<br>';
print_r($fruits); // Array ( [0] => pineapple [1] => banana [2] => orange )
echo '<br>';

// count the array
echo count($fruits) . "<br>"; // 3

// append to array
$fruits[] = "grape";
echo $fruits[3] . "<br>"; // grape
echo count($fruits) . "<br>"; // 4
array_push($fruits, "kiwi");
echo count($fruits) . "<br>"; // 5
echo '<pre>';
print_r($fruits);
echo '</pre>';

// associative arrays
$fruits = [
    "apple" => "red",
    "banana" => "yellow",
];

echo '<pre>';
print_r($fruits);
echo '</pre>';

echo $fruits["apple"] . "<br>"; // red

$favorite = "lime";
$fruits["grape"] = "purple";
$fruits[$favorite] = "green";

echo '<pre>';
print_r($fruits);
echo '</pre>';
