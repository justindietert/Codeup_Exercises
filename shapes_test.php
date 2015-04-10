<?php

require_once 'rectangle.php';
require_once 'square.php';

$shape = new Rectangle(3, 4);

echo $shape->area() . PHP_EOL;

$square = new Square(2, 2);

echo $square->perimeter() . PHP_EOL;