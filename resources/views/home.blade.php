<x-layout>
  <h1>
    <?php echo 'Hello World!'; ?>
    <?= 'Hello World!' // shorthand without echo and ; ?>
    <?php
    // full version for business logic
    $tmp1 = 1;
    $tmp2 = 2;
    echo $tmp1 . ', ' . $tmp2;
    ?>
  </h1>
  <?php
  // not good idea to mix with HTML tags
  echo '<p>' . $tmp1 . ', ' . $tmp2 . '</p>';
  ?>
</x-layout>
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

/* Use varibles.
 *
 * These are wrong:
 * $123name;
 * $n@ame;
 */
$name = 'World';
echo $name;
echo '$name';
echo "$name";
echo "Hello $name!";
echo "Hello {$name}!";
echo 'Hello' . ' ' . $name . '!';

// Use underscores.
$_name = 'World';
$_123name = 'World';
echo $_name;
echo $_123name;

// Assign by value.
$tmp1 = 1;
$tmp2 = $tmp1;
$tmp1 = 2;
echo $tmp2; // 1

// Assign by reference.
$tmp1 = 1;
$tmp2 = &$tmp1;
$tmp1 = 2;
echo $tmp2; // 2
