<?php

class CAutoloader 
{
    
    public static function register($className)
    {
        $dirname = dirname(__DIR__);
        
        require str_replace('\\', '/', $dirname . '/' .$className) . '.php';
    }
    
}

spl_autoload_register('CAutoloader::register');