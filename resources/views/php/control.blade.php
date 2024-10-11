<x-layout>

<?php $score = 75; ?>

<?php if ($score >= 90): // use : for markup next ?>
    <strong>A</strong>
<?php elseif ($score >= 80): // can't use else if ?>
    <strong>B</strong>
<?php elseif ($score >= 70): ?>
    <strong>C</strong>
<?php elseif ($score >= 60): ?>
    <strong>D</strong>
<?php else: ?>
    <strong>F</strong>
<?php endif; // terminate if statement ?>

</x-layout>
<?php

echo '<br>';

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
