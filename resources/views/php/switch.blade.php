<x-layout></x-layout>
<?php

$payment = 'paid';

switch ($payment) {
case 'paid':
    echo 'Payment is successful';
    break;

case 'pending':
    echo 'Payment is pending';
    break;

case 'declined':
    echo 'Payment was declined';
    break;

default:
    echo 'Unknown payment';
    break;
}

echo '<br>';

$payment = 'rejected';

// fallthrough
switch ($payment) {
case 'paid':
    echo 'Payment is successful';
    break;

case 'pending':
    echo 'Payment is pending';
    break;

case 'declined': // declined and rejected share the same code
case 'rejected':
    echo 'Payment was declined';
    break;

default:
    echo 'Unknown payment';
    break;
}

echo '<br>';

$payment = true;

switch ($payment) { // true == 1 or '1' == 1
case 1:
    echo 'Payment is successful';
    break;

case 2:
    echo 'Payment is pending';
    break;

default:
    echo 'Unknown payment';
    break;
}

echo '<br>';

$payments = [1, 2, 3];

foreach ($payments as $payment) {
    switch ($payment) {
    case 1:
        echo 'Payment is successful';
        break 2;

    case 2:
        echo 'Payment is pending';
        break 2;

    default:
        echo 'Unknown payment';
        break 2;
    }
}

echo '<br>';

function tmp() {
    sleep(1);

    echo 'Done' . '<br>';

    return 3;
}

if (tmp() == 1) { // executes the first time
    echo 1;
} elseif (tmp() == 2) { // executes the second time
    echo 2;
} elseif (tmp() == 3) { // executes the third time
    echo 3;
} else {
    echo 4;
}

echo '<br>';

switch (tmp()) { // only executes once
case 1:
    echo 1;
    break;

case 2:
    echo 2;
    break;

case 3:
    echo 3;
    break;

default:
    echo 4;
    break;
}
