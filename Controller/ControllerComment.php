<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 02/08/2017
 * Time: 19:20
 */

namespace App\Controller;


use App\Framework\Controller;
use App\Model\Comment;


class ControllerComment extends Controller
{

    private $comment;

    /**
     * Constructeur
     */
    public function __construct()
    {

        $this->comment = new Comment();
    }

    public function index()
    {

    }

    // Ajoute un signal sur un commentaire
    public function signal()
    {
        $idCom = $this->request->getParameter("id");
        $com = $this->comment->getComment($idCom);

        $this->comment->addSignal($idCom);
        $this->request->getSession()->setFlash('Commentaire signalé');
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->rediriger("billet", "index", $com['bilId']);
    }


}





