<?php

$x = 1;

while ($x <= 100) {
    if ($x % 15 == 0) {
        echo "FizzBuzz\n";
    } elseif ($x % 5 == 0) {
        echo "Buzz\n";
    } elseif ($x % 3 == 0) {
        echo "Fizz\n";
    } else {
        echo "$x\n";
    }

    $x++;
}