<?php

// Column headers should appear in the following format: 
// Office | Date | Report Name
// Total Sales Units | Number of Employees | Units per Employee
// Units | Full Name | Employee Number
// -- Output should be ordered by units in descending order

$filename = 'data/report.txt';

// Open the .txt file and explode it on each new line
$handle = fopen($filename, 'r');
$contentsString = fread($handle, filesize($filename));
$rows = explode("\n", $contentsString);

// Capture the first three array rows for use in report header later
$reportTitle = array_shift($rows);
$reportDate = array_shift($rows);
$officeName = array_shift($rows);

// Trim out unnecessary characters from original report
foreach($rows as $row) {
    $trimmedRow = trim($row, "= *");
    if (!empty($trimmedRow)) {
        $contentsArray[] = $trimmedRow;
    }
}

//remove unnecessary header row
array_shift($contentsArray);

// Set each person to their own array
foreach($contentsArray as $person) {
    $personArray[] = explode(", ", $person);
}

// Place each person's units sold into one array
$units = [];
foreach($personArray as $key => $item) {
    $units[$key] = $item[3];
}
// Use the $units array to sort the $personArray in descending order by units sold
array_multisort($units, SORT_DESC, $personArray);

// Get total units sold by all employees
$totalUnits = 0;
foreach($personArray as $person) {
    $totalUnits += intval($person[3]);
}

// Get units per employee
$unitsPerEmpl = $totalUnits / count($personArray);

// Close the file
fclose($handle);

// Print the results
echo "\n";
echo "====================================================================================\n";
echo $officeName . "\t\t\t" . $reportDate . "\t\t" . strtoupper($reportTitle) . "\n";
echo "====================================================================================\n\n";
echo "Total Units" . "\t\t\t" . "Number of Employees" . "\t\t" . "Units per Employee" . "\n";
echo "------------------------------------------------------------------------------------\n";
echo $totalUnits . "\t\t\t\t" . count($personArray) . "\t\t\t\t" . round($unitsPerEmpl, 2) . "\n";

echo "\n";
echo "Units Sold" . "\t\t\t" . "Full Name (Employee #)" . "\n";
echo "------------------------------------------------------------------------------------\n";

foreach($personArray as $person) {
    echo $person[3] . "\t\t\t\t" . $person[1] . " " . $person[2] . " ($person[0])" . "\n";
}

echo "\n\n";

