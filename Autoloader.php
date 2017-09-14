<?php

namespace App;


class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            if (file_exists($class . ".php")) {
                require $class . '.php';
            } else {
                throw new \Exception('La classe ' . $class . ' n\'existe pas');
            }
        }
    }

}