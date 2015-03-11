<?php

do {
    fwrite(STDOUT, "Starting number: ");
    $start = trim(fgets(STDIN));
    fwrite(STDOUT, "Ending number: ");
    $end = trim(fgets(STDIN));

    if (!is_numeric($start) || !is_numeric($end)) {
        fwrite(STDOUT, "Enter numerals only. ");
    } else {
        for ($i = $start; $i <= $end; $i++) {
            echo "$i\n";
        }
    }

} while (!is_numeric($start) || !is_numeric($end));