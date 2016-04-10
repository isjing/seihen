<?php

class Autoloader {
    public static $path;

    public static function register(){
        self::$path = realpath(dirname(__FILE__).'/../')  . '/';

        spl_autoload_extensions('.php');
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class){
        $file = self::$path . str_replace('\\', '/', $class) . '.php';

        if(file_exists($file)) {
            include $file;
        }
    }
}