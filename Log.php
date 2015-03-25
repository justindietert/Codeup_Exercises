<?php

class Log 
{
    public $filename = '';

    public function logMessage($logLevel, $message)
    {
        $handle = fopen($this->filename, 'a');
        $dateStamp = date("Y/m/d H:i:s");
        $string = "$dateStamp " . "$logLevel " . $message . PHP_EOL;
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