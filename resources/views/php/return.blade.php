<x-layout></x-layout>
<?php

/** return / declare / goto */

function sum(int $a, int $b) {
    $sum = $a + $b;

    return $sum; // return from function, not from script
}

// return; this ends the script

echo sum(5, 10) . '<br>'; // 15
