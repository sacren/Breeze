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
