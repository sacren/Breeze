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

$tmp1 = 1;
$tmp2 = 2;
$tmp3 = 3;

// heredoc
$text = <<<TEXT
               Line $tmp1
               Line $tmp2
               Line $tmp3
               Line 4
TEXT;

echo $text . '<br>';
echo nl2br($text) . '<br>';

// nowdoc
$text = <<<'TEXT'
               Line 1
               Line 2
               Line $tmp3
               Line 4
TEXT;

echo $text . '<br>';
echo nl2br($text) . '<br>';

$greeting = <<<TEXT
Hello world!
TEXT;

echo $greeting . '<br>';

var_dump($greeting); // string(12) "Hello world!"
echo '<br>';

$greeting = <<<TEXT
    Hello world!
TEXT;

echo $greeting . '<br>';

var_dump($greeting); // string(16) "Hello world!"
