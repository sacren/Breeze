<x-layout></x-layout>
<?php

$payment = 'pending';

// match php language construct
match ($payment) {
    'paid' => print 'Payment is successful', // echo fails here
    'pending' => print 'Payment is pending',
    'declined' => print 'Payment was declined',
    default => print 'Payment is not found',
}; // must terminate with a semi-colon

echo '<br>';

$payment = null;

$result = match ($payment) { // match is an expression
    'paid' => 'Payment is successful',
    'pending' => 'Payment is pending',
    'declined' => 'Payment was declined',
    default => 'Payment is not known',
};

var_dump($result);
echo '<br>';

$payment = '1';

// match uses strict comparison
$result = match ($payment) {
    1 => 'Payment is successful',
    2 => 'Payment is pending',
    3 => 'Payment was declined',
    default => 'Payment is not known', // shows this rather than 1
};

echo $result . '<br>';

$payment = 2;

// fallthrough
$result = match ($payment) {
    1 => 'Payment is successful',
    2, 3 => 'Payment is pending',
    4 => 'Payment was declined',
    default => 'Payment is not known',
};

echo $result . '<br>';

$age = 18;

$result = match (true) {
    $age > 18 => 'Adult',
    $age > 12 => 'Youth',
    $age > 6 => 'Child',
    default => 'Infant',
};

var_dump($result);
