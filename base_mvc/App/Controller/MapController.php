<?php
namespace App\Controller;

use App\Model\MapModel;
use Core\Controller\Controller;

class MapController extends Controller{



    public function showLocation()
    {
        $this->render("map.map");
    }
    public function showco()
    {
        $this->render("map.chargeAgences");
    }


}