<x-layout></x-layout>
<?php

// string
$firstName = 'John';
$lastName = 'Doe';
$name = $firstName . ' ' . $lastName;

echo $name . '<br>'; // John Doe
echo "$name" . '<br>'; // John Doe
echo "{$name}" . '<br>'; // John Doe
echo "${name}" . '<br>'; // John Doe

/* without "" these don't work
 *
 * {$name} or ${name}
 */

// accessing characters by index
echo $name[2] . '<br>'; // h
echo $name[-2] . '<br>'; // o

// modifying characters
$name[-1] = 'p';
echo $name . '<br>'; // John Dop

// string length
var_dump($name); // string(8) "John Dop"
echo '<br>';

// padding the string
$name[15] = 'X'; // string length is 16
var_dump($name); // string(16) "John Dop X"
echo '<br>';

/* {} is deprecated in, throws an error in 8.1
 *
 * $name{1};
 */
