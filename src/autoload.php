<?php

define('BASE_PATH', realpath(__DIR__));

function autoload($className)
{
    $fullPath = BASE_PATH . DIRECTORY_SEPARATOR . str_replace('\\', '/', $className) . '.php';
    if (file_exists($fullPath)) {
        require_once($fullPath);
    }
}

spl_autoload_register('autoload');