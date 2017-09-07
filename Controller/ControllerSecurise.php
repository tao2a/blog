<?php


namespace App\Controller;

use App\Framework\Controller;

abstract class ControllerSecurise extends Controller
{

    /**
     * @param $action
     * Vérifie si les informations utilisateur sont présents dans la session
     * Si oui, l'utilisateur s'est déjà authentifié : l'exécution de l'action continue normalement
     * Si non, l'utilisateur est renvoyé vers le contrôleur de connexion
     */

    public function executeAction($action)


    {

        if ($this->request->getSession()->existAttribut( "idUser" )) {
            parent::executeAction( $action );
        } else {
            $this->rediriger( "connexion" );
        }
    }
}