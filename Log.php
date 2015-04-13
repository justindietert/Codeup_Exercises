<?php

class Log 
{
    private $handle;
    private $filename;

    // Construct the filename and open the file for writing.
    // If no parameter is passed, set the prefix to 'log' by default.
    public function __construct($prefix = 'log') 
    {   
        $this->setFilename($prefix);

        $this->setHandle();
    }

    protected function setHandle()
    {
        $currentFilename = $this->getFilename();
        return $this->handle = fopen($currentFilename, 'a');        
    }

    protected function setFilename($prefix)
    {
        // Set the date
        $date = date('Y-m-d');
        // Set the filename with user defined prefix.
        if (is_string($prefix)) {
            return $this->filename = "$prefix-" . $date . ".log";
        } else {
            return $this->filename = "log-"  . $date . ".log";
        }

    }

    public function getHandle()
    {
        return $this->handle;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    // Log the message to the file
    public function logMessage($logLevel, $message)
    {
        // Set the date
        $dateStamp = date("Y/m/d H:i:s");
        $string = "$dateStamp " . "$logLevel " . $message . PHP_EOL;
        // write the string to the file
        fwrite($this->getHandle(), $string);
    }

    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message)
    {
        $this->logMessage("ERROR", $message);
    }

    public function __destruct()
    {
        fclose($this->getHandle());
    }

}