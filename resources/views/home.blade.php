<x-layout></x-layout>
<?php

echo 'Hello World!';
print 'Hello World!';

/* print is the same as echo, but the statement returns 1.
 * print can be used with expressions while echo cannot.
 *
 * This is wrong:
 * print echo 'Hello World!';
 */
echo print 'Hello World!';

# Parentheses are optional.
print('Hello World!');
echo('Hello World!');

// Concatenate with echo, but not with print.
echo 'Hello', ' ', 'World!';

// Escape single quotes or use double quotes.
echo 'What\'s up?';
echo "What's up?";
