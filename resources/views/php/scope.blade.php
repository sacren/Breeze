<x-layout>
@php

/** variable scope */

$tmp = 1; // local scope

// use local scope variable
function getTmp($var)
{
    return $var; // local scope
}

echo getTmp($tmp) . '<br>';

// use global scope variable
function getTmpGlobal()
{
    $tmp = config('app.name'); // global scope

    return $tmp;
}

echo getTmpGlobal() . '<br>';

// to be cached
function someOperation()
{
    sleep(2);

    echo 'Some operation' . '<br>';

    return 10;
}

// use static variable
function getStaticValue()
{
    static $tmp = someOperation();

    return $tmp;
}

echo getStaticValue() . '<br>';
echo getStaticValue() . '<br>';
echo getStaticValue() . '<br>';

@endphp
</x-layout>
