<?php
function hello(): void {
    var_dump('Hello!');
}

hello();
hello();
hello();

function helloName ($name = 'Guest') {
    var_dump("Hello, $name!");
}

$hi = helloName('John');
var_dump($hi); // This will output NULL because the function does not return anything.
helloName('Jane');
helloName('Bob');

function helloNameAndAge ($name, $age) {
    var_dump("Hello, $name! You are $age years old.");
}
helloNameAndAge('John', 30);
helloNameAndAge('Jane', 25);
helloNameAndAge('Bob', 35);

helloName();

$test = function () {
    
};

var_dump($test);

$numbers = [1, 2, 3, 4, 5];
$squares = array_map(function ($n) {
    return $n * $n;
}, $numbers);
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);

function cube(int $a): int|string {
    if ($a < 0) {
        return 'Error: Input must be a non-negative number.';
    } else { // Else not needed, but added for clarity.
        return $a * $a * $a;
    }
    var_dump('BLAAAAAA');
}
var_dump(cube(4));

$answer = cube(5);
$text = "Cube of 5 is $answer";
echo $text;
?>