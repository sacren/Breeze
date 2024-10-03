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

// check if key exists
var_dump(array_key_exists("apple", $fruits)); // true
echo '<br>';
var_dump(array_key_exists("orange", $fruits)); // false
echo '<br>';
var_dump(array_key_exists(0, $fruits)); // false
echo '<br>';
var_dump(array_key_exists('melon', $fruits)); // false
echo '<br>';
$fruits[] = null;
var_dump(array_key_exists(0, $fruits)); // true
echo '<br>';
var_dump(isset($fruits['apple'])); // true
echo '<br>';
var_dump(isset($fruits[0])); // false
echo '<br>';

// multidimensional arrays
$fruits = [
    "origin" => "South America",
    "apple" => [
        "color" => "red",
        "price" => 1.99,
    ],
    "banana" => [
        "color" => "yellow",
        "price" => 0.99,
        "species" => [
            "wild",
            "domestic",
        ],
    ],
];

echo '<pre>';
print_r($fruits);
echo '</pre>';

echo $fruits["apple"]["price"] . "<br>"; // 1.99
echo $fruits["banana"]["species"][1] . "<br>"; // domestic
// $fruits["banana"]["species"][2] throws an error, no such key

// update array with 0 key
$fruits[] = "orange";
echo $fruits[0] . "<br>"; // orange

// '1' overrides 1
$array = [0 => 'foo', 1 => 'bar', '1' => 'baz'];
print_r($array); // Array ( [0] => foo [1] => baz )
echo '<br>';

// the last 1 overrides the rest
$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd'];
print_r($array); // Array ( [1] => 'd' )
echo '<br>';

// access with null and empty string
$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];
echo '<pre>';
print_r($array); // Aray ( [1] => d, [] => e )
echo '</pre>';

echo $array[null] . "<br>"; // e
echo $array[''] . "<br>"; // e

$array = ['a', 'b', 50 => 'c', 'd', 'e'];
echo '<pre>';
print_r($array); // Array ( [0] => a [1] => b [50] => c [51] => d [52] => e )
echo '</pre>';

// shift and pop, index updated
array_shift($array);
echo '<pre>';
print_r($array); // Array ( [0] => b [1] => c [2] => d [3] => e )
echo '</pre>';

array_pop($array);
echo '<pre>';
print_r($array); // Array ( [0] => b [1] => c [2] => d )
echo '</pre>';

// unset and push, index reserved
unset($array[0], $array[1]);
echo '<pre>';
print_r($array); // Array ( [2] => d )
echo '</pre>';

$array[] = 'x';
echo '<pre>';
print_r($array); // Array ( [2] => d [3] => x )
echo '</pre>';

// casting
$tmp = 3;
var_dump((array) $tmp); // array(1) { [0]=> int(3) }
echo '<br>';

$tmp = 'foo';
var_dump((array) $tmp); // array(1) { [0]=> string(3) "foo" }
echo '<br>';

$tmp = null;
var_dump((array) $tmp); // array(0) {}
echo '<br>';
