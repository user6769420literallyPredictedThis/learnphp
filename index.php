<?php
$test = 10;
$test = 3.1;
$test = "Hello World";
$test = "õpilane";
$test = true; // Boolean
$test = false; 
$test = null; // Absence of value
$lol;
var_dump($test);
var_dump($lol);
$test = [1, 2, "Three", 4.0, true, null];
var_dump($test);
$test = new stdClass();
$test->name = "John";
var_dump($test);
$num1 = 10;
$num2 = "10";
var_dump($num1 == $num2); // true
?>