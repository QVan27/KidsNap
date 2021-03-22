<?php

use App\Controller\HomeController;
use App\Controller\UserController;
use App\Controller\ProController;

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
    case 'map':
        $locations = new ProController();
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
            
        default:
        $home = new HomeController();
        $home->home();
        break;
}
