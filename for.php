<?php

do {
    fwrite(STDOUT, "Starting number: ");
    $start = trim(fgets(STDIN));
    fwrite(STDOUT, "Ending number: ");
    $end = trim(fgets(STDIN));
    fwrite(STDOUT, "Choose increment: ");
    $incr = trim(fgets(STDIN));

    if ($incr == '') {
        $incr = 1;
    }

    if (!is_numeric($start) || !is_numeric($end) || !is_numeric($incr)) {
        fwrite(STDOUT, "Enter numerals only.\n");
    } elseif ($start > $end) {
        fwrite(STDOUT, "Starting number must be less than ending number.\n");
    } else {
        for ($i = $start; $i <= $end; $i += $incr) {
            echo "$i\n";
        }
    }

} while (!is_numeric($start) || !is_numeric($end) || !is_numeric($incr) || $start > $end);