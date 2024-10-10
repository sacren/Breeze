<x-layout></x-layout>
<?php

// control structures (if / else / elseif)

$score = 75;

if ($score >= 90) {
    echo 'A';

    if ($score >= 95) {
        echo '+';
    }
} elseif ($score >= 80) { // use elseif instead of else if
    echo 'B';

    if ($score >= 85) {
        echo '+';
    }
} elseif ($score >= 70) {
    echo 'C';

    if ($score >= 75) {
        echo '+';
    }
} elseif ($score >= 60) {
    echo 'D';

    if ($score >= 65) {
        echo '+';
    }
} else {
    echo 'F';
}
