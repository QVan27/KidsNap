<?php

use App\Controller\HomeController;
use App\Controller\ProController;

if (!empty($_GET["page"])) {
$page = $_GET["page"];
} else {
    $page = "home";
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