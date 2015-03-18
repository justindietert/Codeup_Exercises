<?php
date_default_timezone_set("America/Chicago");

function logMessage($logLevel, $message)
{
    $filename = "log-" . date("Y-m-d") . ".txt";
    $handle = fopen($filename, 'a');
    $string = date("Y-m-d") . " " . date("h:i:sa") . " " . "[$logLevel] " . $message . PHP_EOL;

    fwrite($handle, $string);

    fclose($handle);
}

function logInfo($message) {
    logMessage("INFO", $message);
}

function logError($message) {
    logMessage("ERROR", $message);
}

logInfo("This is an informative message.");
logError("This here be an error.");