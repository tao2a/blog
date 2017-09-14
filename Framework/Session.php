<?php
/**
 * Created by PhpStorm.
 * User: Fred
 * Date: 21/07/2017
 * Time: 00:28
 */

namespace App\Framework;


class Session
{
    public function __construct()
    {
        session_start();
    }


    public function destroy()
    {
        session_destroy();
    }

    public function setAttribut($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function existAttribut($name)
    {
        return (isset($_SESSION[$name]) && $_SESSION[$name] != "");
    }

    public function getAttribut($name)
    {
        if ($this->existAttribut($name)) {
            return $_SESSION[$name];
        } else {
            throw new \Exception("L'attribut '$name' est absent de la session");
        }
    }

    public function setFlash($message)
    {
        $_SESSION['flash'] = $message;
    }

    public function flash()
    {
        $flash = false;
        if (isset($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);

        }
        return $flash;

    }

}