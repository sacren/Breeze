<x-layout></x-layout>
<?php

// null constant: null, NULL
$tmp = null;

var_dump($tmp === null); // bool(true)
echo '<br>';

echo $tmp . '<br>'; // print nothing
var_dump($tmp); // NULL
echo '<br>';
var_dump(is_null($tmp)); // bool(true)
echo '<br>';

// casting
var_dump((String) $tmp); // string(0) ""
echo '<br>';

var_dump((int) $tmp); // int(0)
echo '<br>';

var_dump((bool) $tmp); // bool(false)
echo '<br>';

var_dump((float) $tmp); // float(0)
echo '<br>';

var_dump((array) $tmp); // array(0) {}
echo '<br>';

$tmp = 123;
var_dump(is_null($tmp)); // bool(false)
echo '<br>';
