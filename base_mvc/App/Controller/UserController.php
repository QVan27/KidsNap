<?php
namespace App\Controller;

use App\Model\UserModel;
use App\Model\ParentModel;
use App\Model\ProModel;
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

    public function registerParent($data)
    {
        var_dump($data);
        if(isset($data["email"]) && isset($data["nom"]) && isset($data["prenom"]))
        {
            $parentModel = new ParentModel();
            $user = $this->encodeChars($data);
            $user["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            var_dump($user);
            $parent = NULL;
            $parentModel->create($parent);
            $parentID = $this->parentModel->getLast();

            $user["parent_id"] = $parentID;
            $user["pro_id"] = NULL;

            $this->userModel->create($user);

            header("Location:index.php?page=login&status=login");
        }
    }

    public function registerPro($dataUser, $dataPro)
    {
        if(isset($dataUser["email"]) && isset($dataUser["nom"]) && isset($dataUser["prenom"]))
        {
            if(isset($dataPro["pro_tarif"]) && isset($dataPro["pro_ville"]) && isset($dataPro["pro_departement"]) && isset($dataPro["pro_structure"]) && isset($dataPro["pro_nb_place"]))
            {
                $proModel = new ProModel();
                $pro = $this->encodeChars($dataPro);
                $proModel->create($pro);

                $proID = $this->proModel->getLast();

                $user = $this->encodeChars($dataUser);
                $user["password"] = password_hash($dataUser["password"], PASSWORD_DEFAULT);  
    
                $user["pro_id"] = $proID;
                $user["parent_id"] = NULL;  
                $userModel = new UserModel();
    
                $userModel->create($user);

                header("Location:index.php?page=login&status=login");
            }
            
        }
    }


}