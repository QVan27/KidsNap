<?php
namespace App\Controller;

use App\Model\HomeModel;
use Core\Controller\Controller;
use App\Controller\UserController;

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
        $userController = new UserController();
        $proController = new ProController();

        $numberUser = $userController->showNumberUser();
        $numberPro = $proController->showNumberPro();

        $this->render("home", [
            "numberUser"=>$numberUser,
            "numberPro"=>$numberPro
            ]);

    }
    public function showContact()
    {
        $this->render("contact", [
            
        ]);
    }

    public function showMentions()
    {

        $this->render("mentions",
        [
           
        ]);
    }

}