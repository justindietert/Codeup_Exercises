<?php

require_once 'Log.php';

$myLog = new Log(false);
$myLog->logInfo('Hi, info.');
$myLog->logError('Hello, error.');