<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 03/08/2017
 * Time: 23:10
 */

namespace App\Framework;


class Request
{
    // paramètres de la requête
    private $parameters;

    // Objet session associé à la requête
    private $session;

    public function __construct($parameters)
    {
        $this->parameters = $parameters;
        $this->session = new Session();
    }

    public function getSession()
    {
        return $this->session;
    }

    // Renvoie vrai si le paramètre existe dans la requête
    public function existeParameter($name)
    {
        return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }

    // Renvoie la valeur du paramètre demandé
    // Lève une exception si le paramètre est introuvable
    public function getParameter($name, $default = false)
    {
        if ($this->existeParameter($name)) {
            return $this->parameters[$name];
        } else
            return $default;
    }
}