<x-layout></x-layout>
<?php

// Variable can change.
$name = 'Samuel';
$name = 'Jones';

echo $name . '<br>'; // Jones, not Samuel

/* Constants
 *
 * uses define() function for defining constants
 * use upper case for defining constants
 * use single quotes for defining constants
 * don't use $ sign before defining constants
 */
define('EARLY_VOTING', 'Yes');

echo EARLY_VOTING . '<br>'; // Yes

// check if constant is defined, notice the single quotes
echo defined('EARLY_VOTING') . '<br>'; // 1

// constant VOTING is not defined
echo defined('VOTING') . '<br>'; // null, blank

/* const keyword
 *
 * use const keyword for defining constants
 * constants by const keyword is created at compile time
 * constants by define() function is created at runtime
 */
const VOTING = 'Yes';
echo VOTING . '<br>'; // Yes
echo defined('VOTING') . '<br>'; // 1

if (true) {
    define('NEXT_VOTING', 'No');
    echo NEXT_VOTING . '<br>'; // No
    echo defined('NEXT_VOTING') . '<br>'; // 1
}

// dynamic constant
$auth = 'value';
define('AUTH_' . $auth, 1);

echo AUTH_value . '<br>'; // 1

// predefined constants
echo PHP_VERSION . '<br>';

// magic constants, they can change at runtime
echo __LINE__ . '<br>';
echo __FILE__ . '<br>';

// variable variable
$foo = 'bar';
$$foo = 'tir';

echo $foo . ' ' . $bar . '<br>'; // bar tir
echo "$foo $bar" . '<br>'; // bar tir
echo $foo . ' ' . $$foo . '<br>'; // bar tir
echo "$foo $$foo" . '<br>'; // bar $bar
echo "$foo {$$foo}" . '<br>'; // bar tir
echo "$foo ${$foo}" . '<br>'; // bar tir
