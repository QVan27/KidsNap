<?php

use App\Controller\HomeController;
use App\Controller\UserController;
use App\Controller\ProController;
use App\Controller\DashboardController;
use App\Controller\MapController;

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
    case 'map':
        $locations = new MapController();
        $locations->showLocation();
        break;
    case 'pro':
        $pro = new ProController();
        $pro->showPro();
        break;
 
    case 'contact':
        $contact = new HomeController();
        $contact->showContact();
        break;
    case 'mentions':
        $mentions = new HomeController();
        $mentions->showMentions();

        break;
    case 'dashboard-parents':
        $dashboard = new DashboardController();
        $dashboard->showParents();
        break;
    case 'dashboard-pros':
        $dashboard = new DashboardController();
        $dashboard->showPros();
        $locations = new MapController();
        $locations->showLocation();
        break;
    case 'co':
        $locations = new MapController();
        $locations->showco();
        break;
    default:
        $home = new HomeController();
        $home->home();
        break;
}
