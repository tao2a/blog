<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 02/08/2017
 * Time: 18:46
 */

namespace App\Model;

use App\Framework\Model;

class Comment extends Model
{
//Renvoie la liste des commentaires associés à un billet
    public function getComments($idBillet)
    {
        $sql = 'select COM_ID as id, DATE_FORMAT(COM_DATE, \' %d/%m/%Y à  %Hh %imin %ss\') as date,'
            . ' COM_AUTEUR as author, COM_CONTENU as contenu from T_COMMENTAIRE'
            . ' where BIL_ID=?';
        $comments = $this->executeRequest( $sql, array($idBillet) );
        return $comments;
    }

//   Ajoute un commentaire dans la base
    public function addComment($author, $contenu, $idBillet)
    {
        $sql = 'INSERT INTO T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' VALUES(?, ?, ?, ?)';
        $date = date( DATE_W3C );  // Récupère la date courante
        $this->executeRequest( $sql, array($date, $author, $contenu, $idBillet) );
    }

// Renvoie le nombre total de commentaires
    public function getNombreCommentaires()
    {
        $sql = 'SELECT count(*) AS nbCommentaires FROM T_COMMENTAIRE';
        $result = $this->executeRequest( $sql );
        $ligne = $result->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbCommentaires'];
    }

//   Renvoie un commentaire
    public function getComment($id) {
        $sql ='select COM_ID as id, DATE_FORMAT(COM_DATE, \' %d/%m/%Y à  %Hh %imin \') as date,'
            . ' COM_AUTEUR as author, COM_CONTENU as contenu, BIL_ID as bilId from T_COMMENTAIRE'
            . ' where COM_ID=?';
       return $this->executeRequest($sql, array($id))->fetch();
    }

// Ajoute un signalement au commentaire
    public function addSignal($id)
    {
        $sql = 'UPDATE T_COMMENTAIRE
        SET COM_SIGNAL = (COM_SIGNAL+1) WHERE COM_ID =?';
        return $this->executeRequest( $sql, array($id) );

    }


//Selectionne tout les commentaires
    public function getSignals() {
       $sql = 'SELECT COM_ID AS id, DATE_FORMAT(COM_DATE, \' %d/%m/%Y à  %Hh %imin \') AS date, COM_AUTEUR AS author, COM_CONTENU AS contenu, COM_SIGNAL AS alert FROM T_COMMENTAIRE ORDER BY alert DESC ';
        $comments = $this->executeRequest( $sql );
        return $comments;
    }


    public function deleteCom($idCom) {
        $sql = 'DELETE  FROM T_COMMENTAIRE WHERE COM_ID = ?';

       $this->executeRequest($sql, array($idCom));
    }

public function deleteSignal($id) {
        $sql = 'UPDATE T_COMMENTAIRE SET COM_SIGNAL = 0 WHERE COM_ID = ?';
        $this->executeRequest($sql, array($id));

}
}