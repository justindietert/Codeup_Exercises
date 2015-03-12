<?php

$a = 100; // These variables are not accessible inside the functions below.
$b = 200; //

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b !== 0 && !is_string($a) && !is_string($b)) {
        echo $a + $b . PHP_EOL;
    } 

    if (!is_numeric($a) || !is_numeric($b) || is_string($a) || is_string($b)) {
        errorMessageNum($a, $b);
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b !== 0 && !is_string($a) && !is_string($b)) {
        echo $a - $b . PHP_EOL;
    } 

    if (!is_numeric($a) || !is_numeric($b) || is_string($a) || is_string($b)) {
        errorMessageNum($a, $b);
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b !== 0 && !is_string($a) && !is_string($b)) {
        echo $a * $b . PHP_EOL;
    } 

    if (!is_numeric($a) || !is_numeric($b) || is_string($a) || is_string($b)) {
        errorMessageNum($a, $b);
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b !== 0 && !is_string($a) && !is_string($b)) {
        echo $a / $b . PHP_EOL;
    } 

    if (!is_numeric($a) || !is_numeric($b) || is_string($a) || is_string($b)) {
        errorMessageNum($a, $b);
    }

    if($b === 0){
        errorMessageZero($b);
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b !== 0 && !is_string($a) && !is_string($b)) {
        echo $a % $b . PHP_EOL;
    } 

    if (!is_numeric($a) || !is_numeric($b) || is_string($a) || is_string($b)) {
        errorMessageNum($a, $b);
    }

    if($b === 0){
        errorMessageZero($b);
    }
}

function errorMessageNum($x, $y) {
    echo "Both arguments, '$x' and '$y', must be numbers. Do not pass a number as a string.\n";
}

function errorMessageZero($y) {
    echo "Cannot divide by $y.\n";
}


add(1, 2);

subtract(3, 4);

multiply(5, 6);

divide('7', 0);

modulus(20, 0);
