<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 02/08/2017
 * Time: 19:20
 */

namespace App\Controller;


use App\Framework\Controller;
use App\Model\Billet;
use App\Model\Comment;


class ControllerBillet extends Controller
{
    private $billet;
    private $comment;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->billet = new Billet();
        $this->comment = new Comment();
    }

    // Affiche les détails sur un billet
    public function index()
    {
        $idBillet = $this->request->getParameter( "id" );

        $billet = $this->billet->getBillet( $idBillet );
        $comments = $this->comment->getComments( $idBillet );

        $this->generateView( array('billet' => $billet, 'comments' => $comments) );
    }

    // Ajoute un commentaire sur un billet
    public function comment()
    {
        $idBillet = $this->request->getParameter( "id" );
        $author = $this->request->getParameter( "author" );
        $contenu = $this->request->getParameter( "contenu" );
        if (isset( $author ) && isset( $contenu ) && (!empty( $author ) && !empty( $contenu ))) {


            $this->comment->addComment( $author, $contenu, $idBillet );
            $this->request->getSession()->setFlash( 'Commentaire bien ajouté' );
            // Exécution de l'action par défaut pour réafficher la liste des billets
            $this->executeAction( "index" );
        } else {
            $this->rediriger( "billet", "index", $idBillet );
            $this->request->getSession()->setFlash( 'Tous les champs sont obligatoires' );
        }
    }


}





