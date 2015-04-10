<?php

require_once 'rectangle.php';
require_once 'square.php';

$rect = new Rectangle(3, 4);

echo $rect->area() . PHP_EOL;
echo $rect->perimeter() . PHP_EOL;

$square = new Square(2);

echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;