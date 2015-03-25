<?php

require_once 'Log.php';

$myLog = new Log('cli');
$myLog->logInfo('Hi, info.');
$myLog->logError('Hello, error.');