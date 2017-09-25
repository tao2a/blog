<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 03/08/2017
 * Time: 23:53
 */

namespace App\Framework;


use App\Framework\Exception\Error404Exception;

abstract class Controller
{
// Action à réaliser
    private $action;
    /**
     * @var Request
     */
// Requête entrante
    protected $request;

// Définit la requête entrante

    /**
     * @param mixed $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

// Exécute l'Action à réaliser
    public function executeAction($action)
    {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        } else {
            $classController = get_class($this);
            throw new Error404Exception();
        }
    }
// Méthode abstraite qui correspond à l'action par défaut
// On oblige les Classes dérivés à implenter cette action par défaut
    public abstract function index();

    // Génère la vue associée au contrôleur courant
    protected function generateView($donneesView = array(), $action = null)
    {
        // Utilisation de l'action actuelle par défaut
        $actionView = $this->action;
        if ($action != null) {
            // Utilisation de l'action passée en paramètre
            $actionView = $action;
        }

        // Détermination du nom du fichier vue à partir du nom du contrôleur actuel
        $classController = get_class($this);
        $controller = str_replace("App\\Controller\\Controller", "", $classController);
        // Instanciation et génération de la vue
        $view = new View($actionView, $controller, $this->request->getSession());
        $view->generate($donneesView);
    }

    public function rediriger($controller, $action = null, $id = null)
    {
        $racineWeb = Config::get("racineWeb", "/");
        $url = $racineWeb . $controller . "/" . $action;
        if (!is_null($id)) {
            $url .= "/" . $id;
        }
        header("Location:" . $url);

    }
}
