<?php

$x = 0;

do {
    echo $x . PHP_EOL;

    $x += 2;
} while ($x <= 100);

echo "------------------\n";

$y = 100;

do {
    echo $y . PHP_EOL;
    $y -= 5;
} while ($y >= -10);

echo "------------------\n";

$z = 2;

do {
    echo $z . PHP_EOL;
    $z *= $z;
} while ($z < 1000000);