<?php

namespace App\Controller;

use App\Model\EnfantModel;
use Core\Controller\Controller;

class EnfantController extends Controller
{

    public function registerKids($data)
    {
        if (!empty($data)) {
            $enfantModel = new EnfantModel();
            $dataReserv = array(
                "reservation_nb_enfant" => $data["reservation_nb_enfant"],
                "user_id" => $data["user_id"],
                "pro_id" => $data["pro_id"],
                "reservation_start" => $data["reservation_start"],
                "reservation_end" => $data["reservation_end"],
                "status" => $data["status"]
            );

            $enfantModel->createReserv($dataReserv);
            $idReserv = $enfantModel->getLastReserv();

            for ($i = 0; $i < $data["reservation_nb_enfant"]; $i++) {
                if (!empty($_FILES["enfant_carnet"])) {
                    $targetDir = "../public/asset/files/";
                    $fileName = basename($_FILES["enfant_carnet"]["name"]);
                    $targetFilePath = $targetDir . $fileName;
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    $allowType = array('pdf');

                    if (in_array($fileType, $allowType)) {
                        move_uploaded_file($_FILES["enfant_carnet"]["tmp_name"], $targetFilePath);
                    }
                    $carnet = $fileName;
                } else {
                    $carnet = NULL;
                }

                $dataEnfant = array(
                    "user_id" => $data["user_id"],
                    "enfant_nom" => $data["enfant_nom"],
                    "enfant_prenom" => $data["enfant_prenom"],
                    "enfant_age" => $data["enfant_age"],
                    "enfant_carnet" => $carnet,
                    "enfant_commentaire" => $data["enfant_commentaire"]
                );
                $enfantModel->create($dataEnfant);
                $idEnfant = $enfantModel->getLastKid();
                $enfantModel->createLink($idReserv, $idEnfant);
            }
        }
    }
}
