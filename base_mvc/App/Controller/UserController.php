<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Model\ProModel;
use Core\Controller\Controller;


class UserController extends Controller
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showNumberUser()
    {
        $nbUser = $this->userModel->countAll();
        return $nbUser;
    }

    public function login($data)
    {
        if (isset($data["user_mail"])) 
        {
            $user = $this->userModel->getUserByMail($data["user_mail"]);

            if ($user && password_verify($data["user_password"], $user->user_password)) 
            {
                $_SESSION["user"] = $user;
                header("Location:index.php");
            } 
            else 
            {
                $error = "Utilisateur ou mot de passe incorrect.";
            }
        }
        header("location:index.php?page=login");
    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php");
    }

    public function registerParent($data)
    {
        if (isset($data["user_mail"]) && isset($data["user_nom"]) && isset($data["user_prenom"])) {

            $userModel = new UserModel();
            $user = $this->encodeChars($data);
            $user["user_password"] = password_hash($data["user_password"], PASSWORD_DEFAULT);
            $user["user_parent"] = true;
            $user["user_pro"] = false;
            var_dump($user);
            unset($user["password_confirmation"]);
            $userModel->create($user);

            //header("Location:index.php?page=login&status=login");
        }
    }

    public function registerPro($data)
    {
        if (isset($data["user_mail"]) && isset($data["user_nom"]) && isset($data["user_prenom"])) {
            if (isset($data["pro_tarif"]) && isset($data["pro_nb_place"])) {

                $userModel = new UserModel();
                $proModel = new ProModel();

                $dataUser = array(
                    "user_nom" => $data["user_nom"],
                    "user_prenom" => $data["user_prenom"],
                    "user_mail" => $data["user_mail"],
                    "user_password" => $data["user_password"],
                    "password_confirmation" => $data["password_confirmation"],
                    "user_parent" => false,
                    "user_pro" => true,
                );


                $user = $this->encodeChars($dataUser);
                $user["user_password"] = password_hash($dataUser["user_password"], PASSWORD_DEFAULT);
                unset($user["password_confirmation"]);
                $userModel->create($user);
                $userID = $userModel->getLast();

                if (empty($data["justificatif"])) {
                    $data["justificatif"] = NULL;
                }

                $dataPro = array(
                    "pro_tarif" => $data["pro_tarif"],
                    "pro_nb_place" => $data["pro_nb_place"],
                    "user_id" => $userID->user_id,
                    "justificatif" => $data["justificatif"],
                );

                /* Code to get the file, not working */
                /*var_dump($_FILES);

                $targetDir = "public/asset/files/";
                $fileName = basename($_FILES["justificatif"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                $allowType = array('pdf');
                if (in_array($fileType, $allowType)) {
                    move_uploaded_file($_FILES["justificatif"]["tmp_name"], $targetFilePath);
                }

                $dataPro["justificatif"] = $fileName; */

                $pro = $this->encodeChars($dataPro);
                $proModel->create($pro);

                //header("Location:index.php?page=login&status=login");
            }
        }
    }
}
