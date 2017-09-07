<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 02/08/2017
 * Time: 19:14
 */

namespace App\Controller;

use App\Framework\Controller;
use App\Model\Billet;

class ControllerHome extends Controller
{
    private $billet;


    public function __construct()
    {
        $this->billet = new Billet();

    }

    // Affiche la liste de tous les billets du blog
    public function index()
    {
        $billets = $this->billet->getList();
        $this->generateView( array('billets' => $billets) );


    }


    public function list()
    {
        $billets = $this->billet->getBillets();
        $this->generateView( array('billets' => $billets) );

    }


    public function mentions()
    {
        $this->generateView();
    }




}