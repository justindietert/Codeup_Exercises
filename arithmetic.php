<?php

$a = 100; // These variables are not accessible inside the functions below.
$b = 200; //

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
    echo $a % $b . PHP_EOL;
}

add(1, 2);

subtract(3, 4);

multiply(5, 6);

divide(7, 8);

modulus(9, 10);