<?php
function my_autoloader($className)
{
    $baseDir = __DIR__ . '/src';

    if (file_exists($baseDir . '/' . $className . '.php')) {
        require_once $baseDir . '/' . $className . '.php';
    } else {
        $filePath = $baseDir . '/' . str_replace('\\', '/', $className) . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
        }
    }
}

spl_autoload_register('my_autoloader');
