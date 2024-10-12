<x-layout></x-layout>
<?php

// while loop
$i = 0;
while ($i < 10) {
    echo $i++; // without increment, will loop infinitely
}

echo '<br>';

// use break
$i = 0;
while (true) {
    if ($i >= 10) {
        break;
    }

    echo $i++;
}

echo '<br>';

// use break 2
$i = 0;
while (true) {
    while ($i === 10) {
        break 2;
    }

    echo $i++;
}

echo '<br>';

// use continue for odd numbers
$i = 0;
while ($i < 10) {
    if ($i % 2 === 0) {
        $i++;
        continue;
    }

    echo $i++;
}

echo '<br>';

// : and endwhile
$i = 0;
while ($i < 10):
    if ($i % 2 === 0) {
        $i++;
        continue;
    }

    echo $i++;
endwhile;

echo '<br>';

// do while
$i = 0;
do {
    echo $i++; // executed at least once
} while ($i < 10);

echo '<br>';

// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

echo '<br>';

for ($i = 0; $i < 10; print $i, $i++) { // print in third part
}

echo '<br>';

for ($i = 0; print $i, $i < 10; $i++) { // additional 10
}

echo '<br>';

$fruits = ['apple', 'banana', 'orange'];

// avoid unnecessary calls
for ($i = 0, $total = count($fruits); $i < $total; $i++) {
    echo $fruits[$i] . '<br>';
}

// use foreach for arrays
foreach ($fruits as $name) {
    echo $name . '<br>';
}

// foreach with key
foreach ($fruits as $key => $name) {
    echo $key . ': ' . $name . '<br>';
}

// pass by reference
foreach ($fruits as $key => &$name) { // & operator
    $name = 'watermelon'; // modifies $fruits array
}

unset($name); // this is necessary to remove reference
print_r($fruits);
