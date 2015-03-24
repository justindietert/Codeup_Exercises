<?php

require_once 'Log.php';

$myLog = new Log();
$myLog->filename = "log-" . date('Y-m-d') . ".txt";
$myLog->logInfo('Hi, info.');
$myLog->logError('Hello, error.');