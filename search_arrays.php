<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//------------------------------------------------------------

function searchFor($query, $array) {
    $result = array_search($query, $array);

    if ($result || $result == $array[0]) {
        return true;
    } else {
        return false;
    }
}

echo searchFor('Tina', $names) . PHP_EOL . PHP_EOL;

//------------------------------------------------------------

function compareArrays($array1, $array2) {
    // Find number of items in common between arrays
    $result = array_intersect($array1, $array2);
    return count($result);
}

echo "Number of items in common between arrays: " . compareArrays($names, $compare). PHP_EOL;