@php
declare(strict_types=1);
@endphp

<x-layout>
<x-slot:title>Function</x-slot>
@php

// declare function foo
function foo()
{
    echo 'Hello, world!'; // returns null
}

// declare function bar
function bar()
{
    return 'Hi, there!';
}

foo();
echo '<br>';

$greeting = bar();
echo $greeting . '<br>';
echo bar() . '<br>';

var_dump(foo());
echo '<br>';
var_dump(bar());
echo '<br>';

if (false) {
    function qaz() // never declared
    {
        return 'Hi, there!';
    }
}

// echo qaz(); error: Undefined function 'qaz'

function baz()
{
    echo 'baz';

    function foobar()
    {
        echo 'foobar';
    }
}

baz(); // if again, will redeclare 'foobar'
echo '<br>';
foobar(); // foobar() depends on baz()
echo '<br>';

function getOne(): int // return type
{
    return 1;
}

var_dump(getOne()); // int(1)
echo '<br>';

function getStringOne(): int|string
{
    return 1; // use union of int and string to support both
}

var_dump(getStringOne()); // int(1)
echo '<br>';

function getNumberOne(): int|string
{
    return '1'; // use union of int and string to support both
}

var_dump(getNumberOne()); // string(1)
echo '<br>';

function getNothing(): void // can't use null here
{
    return; // optional statement, can't use return null
}

var_dump(getNothing());
echo '<br>';

function getSomething(): ?string // string or other type
{
    return null;
}

var_dump(getSomething());
echo '<br>';

// use | for multiple types
function getFloat(): int|float
{
    return 1.0;
}

var_dump(getFloat());
echo '<br>';

// use mixed for any type
function getMuch(): mixed // wrong: ?mixed
{
    return [];
}

var_dump(getMuch());
echo '<br>';

// quotient or dividend
function getQuotientOrDividend(int $a = 10, int $b = 2): int
{
    if ($b !== 0 && $a % $b === 0) {
        return $a / $b;
    }

    return $a;
}

// use named arguments
var_dump(getQuotientOrDividend(a: 10, b: 2));
echo '<br>';
var_dump(getQuotientOrDividend(b: 3, a: 12)); // order does not matter
echo '<br>';
var_dump(getQuotientOrDividend(a: 10, b: 0));
echo '<br>';

// use default arguments
var_dump(getQuotientOrDividend());
echo '<br>';

// use splat operator
var_dump(getQuotientOrDividend(...['a' => 10, 'b' => 2]));
echo '<br>';

$numbers = ['a' => 10, 'b' => 2];
echo getQuotientOrDividend(...$numbers);
echo '<br>';

// pass by reference: &$a
function passByRef(int|float &$a, int|float $b): int|float
{
    $a--;

    return $b;
}

$tmp1 = 6.0;
$tmp2 = 7;

var_dump($tmp1, $tmp2); // $tmp1 holds 6.0
echo '<br>';

$tmp2 = passByRef($tmp1, $tmp2);

var_dump($tmp1, $tmp2); // $tmp1 changes from 6.0 to 5.0
echo '<br>';

// variadic function with splat operator for type hinting
function sum(int|float $a, int|float $b, int|float|string ...$numbers): int|float
{
    return $a + $b + array_sum($numbers);
}

echo sum($tmp1, $tmp2, 2, 3, 28, '1') . '<br>';

$tmp3 = [2, 3, 28, '1'];
echo sum($tmp1, $tmp2, ...$tmp3) . '<br>';

// variable function
$greet = 'foo';

// calling variable function
if (is_callable($greet)) { // this check makes it robust
    $greet();
    echo '<br>';
}

// anonymous function: expression
$sum = function (int|float|string ...$numbers) use ($tmp1): int|float { // $tmp1 copied
    echo $tmp1 . '<br>';
    return array_sum($numbers);
}; // terminate with semicolon

echo $sum(2, 3, 28, '1') . '<br>';

// pass in anonymous function
$tmp4 = array_map(function (int|float $a): int|float {
    return $a + 1;
}, $tmp3);

echo '<pre>';
print_r($tmp3);
print_r($tmp4);
echo '</pre>';

// pass anonymous function by variable
$tmp5 = function (int|float $a): int|float {
    return $a + 1;
};

$tmp6 = array_map($tmp5, $tmp3);

echo '<pre>';
print_r($tmp6);
echo '</pre>';

function tmp7(int|float $a): int|float
{
    return $a + 1;
}

// pass function by reference
$tmp8 = array_map('tmp7', $tmp3);

echo '<pre>';
print_r($tmp8);
echo '</pre>';

@endphp
</x-layout>
