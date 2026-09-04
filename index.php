<?php
$test = 'Hello, World!';
$test = 'This is a ' . 'test string';
$test .= '!';
$name = 'John Doe';
$age = 30;
$test = $name . ' is ' . $age . ' years old.';
$test = "$name is $age years old."; // Double-quoted strings allow to connect variables directly
$test = "Hello\n\nWorld!"; // Double-quoted strings allow to connect variables directly
$letter = 'A';
$letter ++;

var_dump($letter);

// https://www.php.net/manual/en/ref.strings.php String functions.
?>