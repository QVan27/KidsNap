<?php

namespace App\Controller;

use App\Model\ProModel;
use Core\Controller\Controller;
use App\Controller\UserController;


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
        $proController = new ProController();

        $numberUser = $userController->showNumberUser();
        $numberPro = $proController->showNumberPro();

        $this->render(
            "pro",
            [
                "numberUser" => $numberUser,
                "numberPro" => $numberPro
            ]
        );
    }

    public function getPros()
    {
        $proModel = new ProModel();

        $pros = $proModel->readAll();


        echo '<pre>';
        print_r($pros);
        echo '</pre>';

        $userPros = array();
        $i = 0;

        foreach ($pros as $pro) {
            $user = $proModel->getUserPro($pro->user_id);
            $map = $proModel->getMapPro($pro->user_id);
            if (empty($map)) {

                $userPros[$i] = $user;
            } else {
                $userPros[$i] = $user . $map;
            }
            $i++;
        }

        $this->render(
            "",
            [
                "infoPro" => $userPros,
            ]
        );
    }
}
