<?php

$a = 100; // These variables are not accessible inside the functions below.
$b = 200; //

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } else {
        echo "Both arguments must be numbers.\n";
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
        echo "Both arguments must be numbers.\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
        echo "Both arguments must be numbers.\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a / $b . PHP_EOL;
    } else {
        echo "Both arguments must be numbers.\n";
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a % $b . PHP_EOL;
    } else {
        echo "Both arguments must be numbers.\n";
    }
}

add(1, 2);

subtract(3, 4);

multiply(5, 6);

divide(7, 8);

modulus(9, 10);