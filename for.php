<?php

do {
    do {
        fwrite(STDOUT, "Starting number: ");
        $start = trim(fgets(STDIN));

        if (!is_numeric($start)) {
        fwrite(STDOUT, "ENTER NUMERALS ONLY.\n");
        }
    } while (!is_numeric($start));

    do {
        fwrite(STDOUT, "Ending number: ");
        $end = trim(fgets(STDIN));

        if (!is_numeric($end)) {
        fwrite(STDOUT, "ENTER NUMERALS ONLY.\n");
        }
    } while (!is_numeric($end));

    if ($start > $end) {
        fwrite(STDOUT, "STARTING NUMBER MUST BE LESS THAN ENDING NUMBER.\n");
    }

} while ($start > $end);

do {
    fwrite(STDOUT, "Choose increment: ");
    $incr = trim(fgets(STDIN));

    if (!is_numeric($incr)) {
    fwrite(STDOUT, "ENTER NUMERALS ONLY.\n");
    }
} while (!is_numeric($incr) && $incr != '');

if ($incr == '') {
    $incr = 1;
}

for ($i = $start; $i <= $end; $i += $incr) {
    echo "$i\n";
}