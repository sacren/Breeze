<x-layout></x-layout>
<?php

// integers 0, -0 = false
// floats 0.0, -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

$isComplete = 0;

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = -0;

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = 0.0;

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = -0.0;

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = '';

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = 'false';

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = '0';

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = [];

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

$isComplete = null;

if ($isComplete) {
    echo 'Yes, it is true<br>';
} else {
    echo 'No, it is false<br>';
}

// check if variable is boolean
var_dump($isComplete);
echo '<br>';
var_dump(is_bool($isComplete));
echo '<br>';

$isComplete = false;
var_dump($isComplete);
echo '<br>';
var_dump(is_bool($isComplete));
