<?php

for ($i = 99; $i >= 0; $i--) {

    if ($i == 2) {
        echo "$i bottles of milk on the wall, $i bottles of milk.\n";
        echo "Take one down and pass it around, " . ($i-1) . " bottle of milk on the wall.\n\n";        
    } elseif ($i == 1) {
        echo "$i bottle of milk on the wall, $i bottle of milk.\n";
        echo "Take one down and pass it around, no more bottles of milk on the wall.\n\n";
    } elseif ($i == 0) {
        echo "No more bottles of milk on the wall, no more bottles of milk.\n";
        echo "Go to the store and buy some more, 99 bottles of milk on the wall.\n\n";      
    } else {
        echo "$i bottles of milk on the wall, $i bottles of milk.\n";
        echo "Take one down and pass it around, " . ($i-1) . " bottles of milk on the wall.\n\n";        
    }
}