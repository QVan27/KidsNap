<?php

use App\Controller\HomeController;
use App\Controller\UserController;
use App\Controller\MapController;

if (!empty($_GET["page"])) {
$page = $_GET["page"];
} else {
    $page = "home";
}
if (!empty($_GET["status"])) {
    $status = $_GET["status"];
}else{
    $status = "";
}
switch ($status) {
    case 'login':
        $login = new UserController();
        // $login->login();
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
        $locations = new MapController();
        $locations->showLocation();
        break;
        case 'co' :
            $locations = new MapController();
            $locations->showco();
            break;
    default:
        $home = new HomeController();
        $home->home();
        break;
}
