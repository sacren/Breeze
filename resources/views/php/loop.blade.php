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
