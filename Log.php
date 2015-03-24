<?php

class Log 
{
    public $filename = "log-" . date("Y-m-d") . ".txt";

    public function logMessage($logLevel, $message)
    {
        $handle = fopen($this->filename, 'a');
        $string = date("Y-m-d") . " " . date("h:i:sa") . " " . "[$logLevel] " . $message . PHP_EOL;

        fwrite($handle, $string);

        fclose($handle);
    }

    public function logInfo($message)
    {
        logMessage("INFO", $message);
    }

    public function logError($message)
    {
        logMessage("ERROR", $message);
    }
}