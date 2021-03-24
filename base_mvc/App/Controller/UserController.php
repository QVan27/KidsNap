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
        if (isset($data["user_mail"])) {
            $user = $this->userModel->getUserByMail($data["user_mail"]);

            if ($user && password_verify($data["user_password"], $user->user_password)) {
                $_SESSION["user"] = $user;
                header("Location:index.php");
            } else {
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
        var_dump($data);
        if (!empty($data["user_mail"]) && !empty($data["user_nom"]) && !empty($data["user_prenom"])) {

            $userModel = new UserModel();
            $proModel = new ProModel();

            $user = $this->encodeChars($data);
            $user["user_password"] = password_hash($data["user_password"], PASSWORD_DEFAULT);
            $user["user_parent"] = true;
            $user["user_pro"] = false;
            $existUser = $userModel->existingUser($user["user_mail"], $user["user_parent"]);
            $existPro = $proModel->existingPro($user["user_mail"], $user["user_pro"]);

            if (!empty($existUser)) {
                $error = "Utilisateur parent déjà existant";
            } elseif (!empty($existPro)) {
                $userModel->update($existPro["user_id"], $user["user_parent"]);
                //header("Location:index.php?page=login&status=login");
            } else {
                unset($user["password_confirmation"]);
                $userModel->create($user);

                //header("Location:index.php?page=login&status=login");
            }
        }
    }

    public function registerPro($data)
    {
        if (!empty($data["user_mail"]) && !empty($data["user_nom"]) && !empty($data["user_prenom"])) {
            if (!empty($data["pro_tarif"]) && !empty($data["pro_nb_place"])) {

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

                $existUser = $userModel->existingUser($dataUser["user_mail"], $dataUser["user_parent"]);
                $existPro = $proModel->existingPro($dataUser["user_mail"], $dataUser["user_pro"]);

                if (!empty($existUser)) {

                    $proModel->update($existUser["user_id"], $dataUser["user_pro"]);

                    if (empty($data["justificatif"])) {
                        $data["justificatif"] = NULL;
                    }

                    $dataPro = array(
                        "pro_tarif" => $data["pro_tarif"],
                        "pro_nb_place" => $data["pro_nb_place"],
                        "user_id" => $existUser["user_id"],
                        "justificatif" => $data["justificatif"],
                    );

                    $pro = $this->encodeChars($dataPro);
                    $proModel->create($pro);


                    //header("Location:index.php?page=login&status=login");

                } elseif (!empty($existPro)) {

                    $error = "Utilisateur professionel déjà inscrit";
                    
                } else {

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
}
