<?php

class Log 
{
    public $filename = '';

    public function logMessage($logLevel, $message)
    {
        $handle = fopen($this->filename, 'a');
        $string = date("Y-m-d") . " " . date("h:i:sa") . " " . "$logLevel " . $message . PHP_EOL;

        fwrite($handle, $string);

        fclose($handle);
    }

    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message)
    {
        $this->logMessage("ERROR", $message);
    }
}