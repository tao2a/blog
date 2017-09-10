<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 01/08/2017
 */


namespace App;

use App\Framework\Router;


require 'Autoloader.php';
Autoloader::register();

$router = new Router();
$router->routerRequest();