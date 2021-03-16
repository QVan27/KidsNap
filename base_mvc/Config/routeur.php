<?php

use App\Controller\HomeController;
use App\Controller\UserController;

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
    default:
        $home = new HomeController();
        $home->home();
        $number = new UserController();
        $number->showNumberUser();
        break;
}