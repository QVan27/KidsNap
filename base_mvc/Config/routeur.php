<?php

use App\Controller\HomeController;
use App\Controller\ProController;
use App\Controller\UserController;

if (!empty($_GET["page"])) {
$page = $_GET["page"];
} else {
    $page = "home";
}

if (!empty($_GET["status"])) {
    $status = $_GET["status"];
} else {
    $status = "";
}

switch ($status) {
    case 'login':
        $login = new UserController;
        $login->login($_POST);
        break;
    case 'proRegister':
        $proRegist = new UserController;
        $proRegist->registerPro($_POST);
        break;
    case 'parentRegister':
        $parentRegist = new UserController;
        $parentRegist->registerParent($_POST);
        break;
    default:
        
        break;
}

switch ($page) {
    case 'home':
        $home = new HomeController();
        $home->home();
        break;
    case 'map' :
        $locations = new ProController();
        $locations->showLocation();
        break;
    default:
        $home = new HomeController();
        $home->home();
        break;
}