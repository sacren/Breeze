<x-layout></x-layout>
<?php

// Variable can change.
$name = 'Samuel';
$name = 'Jones';

echo $name;

/* Constants
 *
 * uses define() function for defining constants
 * use upper case for defining constants
 * use single quotes for defining constants
 * don't use $ sign before defining constants
 */
define('EARLY_VOTING', 'Yes');

echo EARLY_VOTING;

// check if constant is defined, notice the single quotes
echo defined('EARLY_VOTING');

// constant VOTING is not defined
echo defined('VOTING');

/* const keyword
 *
 * use const keyword for defining constants
 * constants by const keyword is created at compile time
 * constants by define() function is created at runtime
 */
const VOTING = 'Yes';
echo VOTING;
echo defined('VOTING');

if (true) {
    define('NEXT_VOTING', 'No');
    echo NEXT_VOTING;
    echo defined('NEXT_VOTING');
}
