<?php

$logFile = '../error.log';

// Включите запись ошибок в файл
ini_set('log_errors', 1);
ini_set('error_log', $logFile);
ini_set('display_errors', 1);

error_reporting(E_ALL);


// Обработка ошибок PHP
function customErrorHandler($errno, $errstr, $errfile, $errline): void
{
    global $logFile;
    $message = date('[Y-m-d H:i:s]') . " Error: $errstr in $errfile on line $errline\n";
    error_log($message, 3, $logFile);
}

// Установите пользовательский обработчик ошибок
set_error_handler('customErrorHandler');