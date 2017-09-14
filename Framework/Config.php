<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 03/08/2017
 * Time: 22:41
 */

namespace App\Framework;

class Config
{
    private static $parameters;

// Renvoie la valeur d'un paramètre de config
    public static function get($name, $defaultValue = null)
    {
        $parameters = self::getParameters();
        if (isset($parameters[$name])) {
            $value = $parameters[$name];
        } else {
            $value = $defaultValue;
        }
        return $value;
    }

    // Renvoie le tableau des paramètres en le chargeant au besoin
    private static function getParameters()
    {
        if (self::$parameters == null) {
            $filePath = "Config/prod.ini";
            if (!file_exists($filePath)) {
                $filePath = "Config/dev.ini";
            }
            if (!file_exists($filePath)) {
                throw new \Exception("Aucun fichier de configuration n'a été trouvé");
            } else {
                self::$parameters = parse_ini_file($filePath);
            }
        }
        return self::$parameters;
    }
}