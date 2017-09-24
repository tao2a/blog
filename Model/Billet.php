<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 02/08/2017
 * Time: 18:12
 */

namespace App\Model;

use App\Framework\Model;


class Billet extends Model
{
//    Renvoie la liste des billets du blog
    public function getBillets()
    {
        $sql = 'select T_BILLET.BIL_ID as id, DATE_FORMAT(BIL_DATE, \' %d/%m/%Y à  %Hh %imin \') as date,'
            . ' BIL_TITRE as title, BIL_CONTENU as contenu, COUNT(T_COMMENTAIRE.COM_ID) as nbCom from T_BILLET '
            . ' LEFT JOIN T_COMMENTAIRE ON T_COMMENTAIRE.BIL_ID=T_BILLET.BIL_ID'
            . '  GROUP BY T_BILLET.BIL_ID'
            . ' order by T_BILLET.BIL_ID desc';
        $billets = $this->executeRequest($sql);
        return $billets;
    }

//Renvoie les infos sur un billet
    public function getBillet($idBillet)
    {
        $sql = 'SELECT BIL_ID AS id, DATE_FORMAT(BIL_DATE, \' %d/%m/%Y à  %Hh %imin \') AS date,'
            . ' BIL_TITRE AS title, BIL_CONTENU AS contenu from T_BILLET'
            . ' where BIL_ID=?';
        $billet = $this->executeRequest($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch(); //Première ligne de résultat
        else
            throw new \Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }

//Renvoie le nombre total de billet
    public function getNombreBillets()
    {
        $sql = 'SELECT count(*) AS nbBillets FROM T_BILLET';
        $result = $this->executeRequest($sql);
        $ligne = $result->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbBillets'];

    }


// Met à jour un billet
    public function update($title, $contenu, $idBillet)
    {
        $sql = 'UPDATE T_BILLET
        SET BIL_DATE = ?, BIL_TITRE = ?, BIL_CONTENU = ? WHERE BIL_ID = ? ';
        $date = date(DATE_W3C);
        $billet = $this->executeRequest($sql, array($date, $title, $contenu, $idBillet));
        return $billet;

    }

// Publie un nouveau billet
    public function addBillet($idBillet, $title, $contenu)
    {
        $sql = 'INSERT INTO T_BILLET(BIL_ID, BIL_DATE, BIL_TITRE, BIL_CONTENU)'
            . ' VALUES(?, ?, ?, ?)';
        $date = date(DATE_W3C);
        $this->executeRequest($sql, array($idBillet, $date, $title, $contenu));
    }

// Efface un billet
    public function delete($idBillet)
    {
        $sql = 'DELETE FROM T_BILLET WHERE BIL_ID= ?';

        $billet = $this->executeRequest($sql, array($idBillet));
        return $billet;

    }

    public function getList()
    {
        $sql = 'select T_BILLET.BIL_ID as id, DATE_FORMAT(BIL_DATE, \' %d/%m/%Y à  %Hh %imin \') as date,'
            . ' BIL_TITRE as title, BIL_CONTENU as contenu, COUNT(T_COMMENTAIRE.COM_ID) as nbCom from T_BILLET '
            . ' LEFT JOIN T_COMMENTAIRE ON T_COMMENTAIRE.BIL_ID=T_BILLET.BIL_ID'
            . '  GROUP BY T_BILLET.BIL_ID'
            . ' order by T_BILLET.BIL_ID desc limit 0, 3';
        $billets = $this->executeRequest($sql);
        return $billets;
    }


}