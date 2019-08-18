<?php
/**
 * Date: 2019/8/16
 * Time: 23:09
 */


date_default_timezone_set('PRC'); //设置中国时区
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    throw new \Exception('Can\'t find autoload.php. Did you install dependencies via composer?');
}

function autoload($className)
{
    $classFile = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    include $classFile;
    if ($classFile === false || !is_file($classFile)) {
        return;
    }

    if (!class_exists($className, false) && !interface_exists($className, false) && !trait_exists($className, false)) {
        throw new Exception("Unable to find '$className' in file: $classFile. Namespace missing?");
    }
}

spl_autoload_register('autoload', true, true);