<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Convert string into array. Separate based on ', '.
$physicistsArray = explode(', ', $physicistsString);

// Converts array into list n1, n2, ..., and n3. Sorting set to false by default.
function humanizedList($array, $sort = false) {
    // will only sort array alphabetically if user passes second parameter 'true' when function is called.
    if ($sort) {
        sort($array);   
    }
    // capture the last item to a variable
    $lastItem = array_pop($array);
    // implode the array back into a string and concatenate ', and' as well as the last item back on.
    return implode(', ', $array) . ", and $lastItem";
}

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray, true);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";