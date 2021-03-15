<?php
namespace App\Controller;

use App\Model\HomeModel;
use Core\Controller\Controller;

/**
 * Le CRUD (create, read, update, delete) sont l'ensemble des méthodes permettant de manipuler 
 * des données dans la base de données.
 */
class HomeController extends Controller{

     /**
      * Récupère et affiche toutes les catégories
      *
      */
    public function home()
    {

        $this->render("home", [
            ]);

    }

}