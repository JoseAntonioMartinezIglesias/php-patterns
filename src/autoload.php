<?php

function autoloader($class) {
    $filename = realpath(dirname(__FILE__)) . '/' . str_replace('\\', '/', $class) . '.php';
    //print $filename . "\n";
    if (file_exists($filename)) {
        include_once($filename);
    }
}

spl_autoload_register('autoloader');

