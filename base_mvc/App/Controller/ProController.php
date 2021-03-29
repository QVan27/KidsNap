<?php

namespace App\Controller;

use App\Model\ProModel;
use Core\Controller\Controller;
use App\Controller\UserController;
use App\Model\UserModel;

class ProController extends Controller
{

    public function __construct()
    {
        $this->proModel = new ProModel();
    }

    public function showNumberPro()
    {
        $nbPro = $this->proModel->countAll();
        return $nbPro;
    }
    public function showNumberParent()
    {
        $nbPro = $this->proModel->countAllParents();
        return $nbPro;
    }

    public function showLocation()
    {

        $this->render(
            "map",
            []
        );
    }

    public function showPro()
    {

        $userController = new UserController();
        $userModel = new UserModel();

        $numberUser = $userModel->countAll();
        $numberPro = $this->proModel->countAll();
        $numberParent = $this->proModel->countAllParents();

        $this->render(
            "pro",
            [
                "numberUser" => $numberUser,
                "numberPro" => $numberPro,
                "numberParent" => $numberParent
            ]
        );
    }

    public function getPros()
    {
        // $proModel = new ProModel();
        $userModel = new UserModel();

        // $pros = $proModel->readAll();
        $users = $userModel->getAllPro();
        // var_dump($users);

// var_dump($pros);
        // echo '<pre>';
        // print_r($pros);
        // echo '</pre>';

        // $userPros = array();
        // $i = 0;

        // foreach ($pros as $pro) {
        //     $user = $proModel->getUserPro($pro->user_id);
        //     $map = $proModel->getMapPro($pro->user_id);
        //     if (empty($map)) {

        //         $userPros[$i] = $user;
        //     } else {
        //         $userPros[$i] = $user . $map;
        //     }
        //     $i++;
        // }

        $this->render(

            "map.map",

            [
                "users" => $users,
                // "pros" => $pros,
            ]
        );
    }
}
