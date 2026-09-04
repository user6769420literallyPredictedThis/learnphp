<?php
$test = [1, 2, 'word', true];
var_dump($test[3]); // Prints the 4th element of the array, which is true
$test[2] = 'new word'; // Changes the 3rd element of the array to 'new word'
$test[4] = 'new value'; // Adds a new element to the array at index 4
$test[] = 'another value'; // Adds a new element to the end of the array
array_push($test, 'pushed value'); // Adds a new element to the end of the array using array_push. Same as last example but more complicated..
$test = [ 
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'random key',
    100 => 'New value',
    ]; // Reassigns the array to a new associative array
var_dump($test['name']); // Prints the value of the 'name' key, which is 'John'
var_dump($test); // Prints the value of the 100 key, which is 'New value'

$test = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($test[1][2]); // Prints the value of the 3rd element of the 2nd array, which is 6
?>