<?php
$test = true;
$test = false;
$test = true && false; // false
$test = false && false; // false
$test = true && true; // true
$test = true || true; // true
$test = true || false; // true alt+ctrl "<>" for "|"
$test = false || false; // false
$test = !false; // true, not false
$test = !true; // false, not true
$test = 10 > 5; // true, 10 is greater than 5
$test = !(10 > 5); // false, not true
$test = 100 == 100; // true, 100 is equal to 100
$test = 100 >= 100; // true, 100 is greater than or equal to 100
$test = 100 != 100; // false, 100 is not equal to 100
$test = 100 !== 100; // false, 100 is not equal to 100, strictly
$test = 100 == '100'; // true, 100 is equal to 100
$test = 100 === '100'; // true, 100 is equal to 100, strictly
$test = true && false || (true && !true); // true and false is false, true and not true is false, false or false is false
var_dump($test);
?>