<?php
	
require 'vendor/autoload.php';

function autoload($className) {
    $filename = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($filename)) {
        require_once $filename;
    }
}

// Register the autoloader funct	ion
spl_autoload_register('autoload');	
