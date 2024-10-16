<?php
declare(strict_types = 1); // must be the first line
?>
<x-layout></x-layout>
<?php

/** return / declare / goto */

function sum(int $a, int $b) {
    $sum = $a + $b;

    return $sum; // return from function, not from script
}

// return; this ends the script

echo sum(5, 10) . '<br>'; // 15
// echo sum('5', 10) . '<br>'; error due to type mismatch

function onTick() {
    echo 'Tick<br>';
}

register_tick_function('onTick');

declare(ticks = 3); // global scope

for ($i = 0; $i < 6; $i++) {
    echo $i . '<br>';
}
