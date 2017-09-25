<?php

namespace App\Model;


use App\Framework\Model;

class User extends Model
{
    /**
     * Vérifie qu'un utilisateur existe dans la BD
     *
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connect($login, $mdp)
    {
        $sql = "SELECT UTIL_ID AS id, UTIL_MDP AS mdp FROM T_UTILISATEUR WHERE UTIL_LOGIN=? ";
        $user = $this->executeRequest($sql, array($login));
        if ($user->rowCount() == 1) {
            $user = $user->fetch();

            return password_verify($mdp, $user['mdp']);
        } else {
            return false;
        }

    }

    /**
     * Renvoie un utilisateur existant dans la BD
     *
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return mixed L'utilisateur
     * @throws \Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUser($login)
    {
        $sql = "SELECT UTIL_ID AS idUser, UTIL_LOGIN AS login, UTIL_MDP AS mdp 
            FROM T_UTILISATEUR WHERE UTIL_LOGIN=?";
        $user = $this->executeRequest($sql, array($login));
        if ($user->rowCount() == 1)
            return $user->fetch();  // Accès à la première ligne de résultat
        else
            throw new \Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }

    //Changement du login
    public function changeLogin($idUser, $login)
    {

        $sql = 'UPDATE T_UTILISATEUR
        SET UTIL_LOGIN  = ?
       WHERE UTIL_ID = ?';
        $user = $this->executeRequest($sql, array($login, $idUser));
    }

    //Changement du Mot de passe
    public function updateMdp($mdp, $id)
    {
        $hash = password_hash($mdp, PASSWORD_BCRYPT);
        $sql = 'UPDATE T_UTILISATEUR
        SET UTIL_MDP  = ?
       WHERE UTIL_ID = ?';
        $user = $this->executeRequest($sql, array($hash, $id));
    }

}

