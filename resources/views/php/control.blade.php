<x-layout></x-layout>
<?php

// control structures (if / else / elseif)

$score = 75;

if ($score >= 90) {
    echo 'A';
} elseif ($score >= 80) { // use elseif instead of else if
    echo 'B';
} elseif ($score >= 70) {
    echo 'C';
} elseif ($score >= 60) {
    echo 'D';
} else {
    echo 'F';
}
