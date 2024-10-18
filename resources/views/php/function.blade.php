<x-layout></x-layout>
<?php

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
