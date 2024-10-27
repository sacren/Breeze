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

@endphp
</x-layout>
