<?php
namespace App\Controller;

use App\Model\ProModel;
use Core\Controller\Controller;
use App\Controller\UserController;


class ProController extends Controller{

    public function __construct()
    {
        $this->proModel = new ProModel();
    }

    public function showNumberPro()
    {
        $nbPro = $this->proModel->countAll();
        return $nbPro;
    }

    public function showLocation()
    {
        $proModel = new ProModel();

        $locations = $proModel->getLocationAll();

        $this->render("map",
        [
            "locations" => $locations
        ]);
    }
    public function showPro()
    {

        $userController = new UserController();
        $proController = new ProController();

        $numberUser = $userController->showNumberUser();
        $numberPro = $proController->showNumberPro();

        $this->render("pro",
        [
            "numberUser"=>$numberUser,
            "numberPro"=>$numberPro
        ]);
    }


}