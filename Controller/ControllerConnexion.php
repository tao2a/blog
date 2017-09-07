<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 04/08/2017
 * Time: 03:28
 */

namespace App\Controller;

use App\Framework\Controller;
use App\Model\User;


// Connexion au site

class ControllerConnexion extends Controller
{
    private $user;


    public function __construct()
    {
        $this->user = new user();
    }


    /**
     *
     */
    public function index()
    {
        $this->generateView();
    }


    public function connect()
    {

        if ($this->request->existeParameter( "login" ) && $this->request->existeParameter( "mdp" )) {
            $login = $this->request->getParameter( 'login' );
            $mdp = $this->request->getParameter( 'mdp' );
            if ($this->user->connect( $login, $mdp )) {
                $user = $this->user->getUser( $login );
                $this->request->getSession()->setAttribut( "idUser",
                    $user['idUser'] );
                $this->request->getSession()->setAttribut( "login",
                    $user['login'] );
                $this->rediriger( "admin" );
            } else
                $this->generateView( array('msgError' => 'Identifiant, ou Mot de passe incorrect.'), "index" );
        } else
            throw new \Exception( 'Action impossible : login ou mot de passe non défini' );
    }


    public function deconnecter()
    {
        $this->request->getSession()->destroy();
        $this->request->getSession()->setFlash( "vous vous êtes deconnecté" );
        $this->rediriger( "home" );

    }



}
