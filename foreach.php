<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

echo "\n\n==== Type Loop ====\n\n";

foreach ($things as $thing) {
    if (is_int($thing)) {
        echo "integer\n";
    } elseif (is_float($thing)) {
        echo "float\n";
    } elseif (is_bool($thing)) {
        echo "boolean\n";
    } elseif (is_array($thing)) {
        echo "array\n";
    } elseif (is_null($thing)) {
        echo "null\n";
    } elseif (is_string($thing)) {
        echo "string\n";
    }
}

echo "\n\n==== Scalar Only Loop ====\n\n";

foreach ($things as $key => $thing) {
    if (is_scalar($thing)) {
        echo "Element at index $key is: $thing\n";
    }
}

echo "\n\n==== Every Value ====\n\n";

foreach ($things as $key => $thing) {
    if (is_array($thing)) {
        $array = implode(", ", $thing);
        echo "Array($array)\n";
    } else {
        echo "$thing\n";
    }
}

echo "\n\n";