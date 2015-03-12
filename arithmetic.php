<?php

function add($a, $b) {

    if (isNotNumber($a)) {
        return errorNotNum($a);
    }

    if (isNotNumber($b)) {
        return errorNotNum($b);
    }

    return $a + $b; 
}

//------------------------------------//

function subtract($a, $b) {

    if (isNotNumber($a)) {
        return errorNotNum($a);
    }

    if (isNotNumber($b)) {
        return errorNotNum($b);
    }

    return $a - $b; 
}

//------------------------------------//

function multiply($a, $b) {

    if (isNotNumber($a)) {
        return errorNotNum($a);
    }

    if (isNotNumber($b)) {
        return errorNotNum($b);
    }

    return $a * $b; 
}

//------------------------------------//

function divide($a, $b) {

    if (isNotNumber($a)) {
        return errorNotNum($a);
    }

    if (isNotNumber($b)) {
        return errorNotNum($b);
    }

    if (isNotZero($b)) {
        return $a / $b; 
    } else {
        return errorZero();
    }
}

//------------------------------------//

function modulus($a, $b) {

    if (isNotNumber($a)) {
        return errorNotNum($a);
    }

    if (isNotNumber($b)) {
        return errorNotNum($b);
    }

    if (isNotZero($b)) {
        return $a % $b; 
    } else {
        return errorZero();
    }
}

//------------------------------------//

function isNotZero($x) {
    return $x != 0 ? true : false;
}

function isNotNumber($x) {
    return !is_numeric($x) ? true : false;
}

function errorNotNum($x) {
    return "Cannot perform operation on user entry '$x' (not numeric).";
}

function errorZero() {
    return "Cannot divide by zero.";
}

//------------------------------------//

echo add(1, 2) . PHP_EOL;

echo subtract(3, 4) . PHP_EOL;

echo multiply(5, 6) . PHP_EOL;

echo divide('7', 0) . PHP_EOL;

echo modulus('f', 0) . PHP_EOL;
