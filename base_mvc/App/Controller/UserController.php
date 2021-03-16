<?php
namespace App\Controller;

use App\Model\UserModel;
use Core\Controller\Controller;

class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showNumberUser()
    {
        $nbUser = $this->userModel->countAll();
        return $nbUser;
    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php");
    }



}