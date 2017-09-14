<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 02/08/2017
 * Time: 18:51
 */

namespace App\Framework;

class View
{
//nom du fichier à associer à la vue
    private $file;

//titre de la vue (défini dans le fichier vue)
    private $title;

    private $session;

    public function __construct($action, $controller = "", $session = false)
    {
        $this->session = $session;
        // Détermination du nom du fichier vue à partir de l'action et du constructeur
        $file = "View/";
        if ($controller != "") {
            $file = $file . $controller . "/";
        }
        $this->file = $file . $action . ".php";
    }

//Génère et affiche la vue

    /**
     * @param $donnees
     */
    public function generate($donnees)
    {

        //Génération de la partie spécifique à la vue
        $contenu = $this->generateFile($this->file, $donnees);
        // On défini une variable locale accessible par la vue pour la racine Web
        // Il s'agit du chemin vers le site sur le serveur Web
        // Nécessaire pour les URL de type Controller/action/id
        $racineWeb = Config::get("racineWeb", "/");
        // On génère le Template commun utilisant la partie spécifique
        $view = $this->generateFile('View/template.php',
            array('title' => $this->title,
                'flash' => $this->session->flash(),
                'bodyclass' => (isset($this->bodyclass)) ? $this->bodyclass : "",
                'contenu' => $contenu,
                'racineWeb' => $racineWeb));
        //Renvoie la vue au navigateur
        echo $view;
    }

//Génère un fichier vue et renvoie le résultat produit
    private function generateFile($file, $donnees)
    {
        if (file_exists($file)) {
            //rend les éléments du tableau $donnée accessible dans la vue
            extract($donnees);
            //Temporisation de sortie
            ob_start();
            //inclue le fichier vue
            //Son résultat est placé dans le tampon de sortie
            require $file;
            //Arrêt de la temporisation et renvoie le tampon de sortie
            return ob_get_clean();
        } else
            throw new \Exception("Le fichier '$file' est introuvable");

    }

// Nettoie une Valeur insérée dans une page HTML( htmlspecialchars)
    private function clean($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
    }

}