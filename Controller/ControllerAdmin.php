<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 04/08/2017
 * Time: 03:39
 */

namespace App\Controller;

use App\Model\Billet;
use App\Model\Comment;
use App\Model\User;


class ControllerAdmin extends ControllerSecurise
{
    private $billet;
    private $comment;
    private $user;

    public function __construct()
    {
        $this->billet = new Billet();
        $this->comment = new Comment();
        $this->user = new User();
    }

    public function index()
    {
        $nbBillets = $this->billet->getNombreBillets();
        $nbComments = $this->comment->getNombreCommentaires();
        $login = $this->request->getSession()->getAttribut( "login" );
        $this->generateView( array('nbBillets' => $nbBillets,
            'nbCommentaires' => $nbComments,
            'login' => $login) );


    }


//Changement de mot de passe
    public function changePass()
    {

        $mdp = $this->request->getParameter( 'pass' );
        $verifPass = $this->request->getParameter( 'verifPass' );

        if ($mdp !== false && $verifPass !== false) {
            if ($mdp === $verifPass) {
                if (preg_match( "#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)(?!.*[<>]).{8,30}$#", $mdp )) {
                    $this->user->updateMdp( $mdp, $this->request->getSession()->getAttribut( 'idUser' ) );
                } else {
                    $this->request->getSession()->setFlash( 'mots de passe non autorisé' );
                }

            } else {
                $this->request->getSession()->setFlash( 'Les mots de passe ne sont pas identiques' );
            }
        } else {
            $this->request->getSession()->setFlash( 'Action non autorisée' );
        }
        $this->rediriger( "admin/index" );
        $this->request->getSession()->setFlash( 'Le mot de passe a été modifié' );

    }



//Changement de mot de login
    public
    function changeLogin()
    {
        $oldLogin = $this->request->getParameter( 'oldLogin' );
        $login = $this->request->getParameter( 'login' );
        if ($oldLogin !== false && $login !== false) {
            if ($oldLogin !== $login) {
                $this->user->updateLogin( $this->request->getSession()->getAttribut( 'idUser' ), $login );
            } else {
                $this->request->getSession()->setFlash( 'Le pseudo est le même, vous ne voulez donc pas le changer' );
            }


        } else {
            $this->request->getSession()->setFlash( 'Action non autorisée' );
        }
        $this->rediriger( "admin/index" );
        $this->request->getSession()->setFlash( 'Le pseudo a été modifié' );
    }


//Liste des articles pour la page edition
    public
    function articles()
    {

        $billets = $this->billet->getBillets();
        $this->generateView( array('billets' => $billets) );
    }

//Edition d'un article
    public
    function edit()
    {

        $idBillet = $this->request->getParameter( 'id' );
        $billet = $this->billet->getBillet( $idBillet );
        $title = $this->request->getParameter( 'title' );
        $contenu = $this->request->getParameter( 'contenu' );

        if ($contenu !== false && $title !== false) {
            $this->billet->update( $title, $contenu, $idBillet );
            $this->rediriger( "admin/articles" );
            $this->request->getSession()->setFlash( 'Article modifié' );
        } else {
            $this->generateView( array('msgError' => 'Tous les champs sont obligatoires', "billet" => $billet), "edit" );

        }
        return $idBillet;

    }


//Suppression d'un article
    public
    function delete()
    {
        $idBillet = $this->request->getParameter( 'id' );


        $this->billet->delete( $idBillet );
        $this->rediriger( "admin/articles" );
        $this->request->getSession()->setFlash( 'Article supprimé' );

    }

//    Création d'un nouveau billet
    public
    function newPost()
    {
        {
            $idBillet = $this->request->getParameter( 'idBillet' );
            $title = $this->request->getParameter( 'title' );
            $contenu = $this->request->getParameter( 'contenu' );
            if (isset( $title ) && isset( $contenu ) && (!empty( $title ) && !empty( $contenu ))) {
                $this->billet->addBillet( $idBillet, $title, $contenu );
                $this->rediriger( "admin/articles" );
                $this->request->getSession()->setFlash( 'Article publié' );

            } else {
                $this->generateView( array('msgError' => 'Tous les champs sont obligatoires', "id" => $idBillet), "new" );
                $this->request->getSession()->setFlash( 'Article publié' );
            }

        }
    }

    //  Supprime un commentaire
    public function deleteComment()
    {
        $idCom = $this->request->getParameter( "id" );


        $this->comment->deleteCom( $idCom );
        $this->rediriger( "admin", "listCom" );
        $this->request->getSession()->setFlash( 'Commentaire supprimé' );


    }

//  Remet à zero les signalements
    public function removeSignal()
    {
        $idCom = $this->request->getParameter( "id" );


        $this->comment->deleteSignal( $idCom );
        $this->request->getSession()->setFlash( 'Signalement supprimé' );
        $this->rediriger( "admin", "listCom" );

    }
// Renvoie la liste des commentaires signalés et non signalés
    public function listCom()
    {
        $idCom = $this->request->getParameter( "id" );

        $comments = $this->comment->getSignals();


        $this->generateView( array('comments' => $comments, 'id' => $idCom) );


    }

}