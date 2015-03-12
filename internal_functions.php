<?php

$null = null;
$blankString = '';
$array = array(1, 2, 3);
$emptyArray = [];
$arrayWithKeyButValueSetToBlank = ['key' => ''];

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function setOrEmpty($x, $var_name) {

    if (empty($x) && isset($x)) {
        return "$var_name is EMPTY and SET";
    }

    if (empty($x)) {
        return "$var_name is EMPTY";
    } 

    if (isset($x)) {
        return "$var_name is SET";
    } 

}

echo PHP_EOL . setOrEmpty($null, '$null') . PHP_EOL . PHP_EOL;
echo setOrEmpty($blankString, '$blankString') . PHP_EOL . PHP_EOL;
echo setOrEmpty($emptyArray, '$emptyArray') . PHP_EOL . PHP_EOL;
echo setOrEmpty($arrayWithKeyButValueSetToBlank, '$arrayWithKeyButValueSetToBlank') . PHP_EOL . PHP_EOL;

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results
echo serialize($array) . PHP_EOL . PHP_EOL;

// Unserialize the array $array, and output the results
print_r(unserialize(serialize($array))) . PHP_EOL;