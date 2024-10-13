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
