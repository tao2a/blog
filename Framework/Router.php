<?php

namespace App\Framework;

class Router
{

    // Route une requête entrante : exécute l'action associée
    public function routerRequest()
    {
        try {
            // Fusion des paramètres GET et POST de la requête
            $request = new Request( array_merge( $_GET, $_POST ) );

            $controller = $this->createController( $request );
            $action = $this->createAction( $request );
            $controller->executeAction( $action );
        } catch (\Exception $e) {
            $this->manageError( $e, $request->getSession() );
        }
    }

    // Crée le contrôleur approprié en fonction de la requête reçue
    private function createController(Request $request)
    {
        $controller = "home";  // Contrôleur par défaut
        if ($request->existeParameter( 'controller' )) {
            $controller = $request->getParameter( 'controller' );
            $controller = ucfirst( strtolower( $controller ) ); // Première lettre en majuscule
        }

        // Création du nom du fichier du contrôleur
        $classController = "App\\Controller\\Controller" . $controller;
        $fileController = "Controller\\" . $classController . ".php";
        //if (file_exists( $fileController )) {
        // Instanciation du contrôleur adapté à la requête

        $controller = new $classController();
        $controller->setRequest( $request );
        return $controller;
    }

    private function createAction(Request $request)
    {
        $action = "index";  // Action par défaut
        if ($request->existeParameter( 'action' )) {
            $action = $request->getParameter( 'action' );
        }
        return $action;
    }

    // Gère une erreur d'exécution (exception)
    private function manageError(\Exception $exception, Session $session)
    {
        $view = new View( 'error', null, $session );
        $view->generate( array('msgError' => $exception->getMessage()) );
    }
}