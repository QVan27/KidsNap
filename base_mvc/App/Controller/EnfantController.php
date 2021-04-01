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
                "reservation_nb_enfant" => $data["nb-kids"],
                "user_id" => $_SESSION["user"]->user_id,
                "pro_id" => $data["pro_id"],
                "reservation_start" => date('D d F Y'),
                "reservation_end" => date('D d F Y'),
                "status" => "stand-by"
            );

            $enfantModel->createReserv($dataReserv);
            $idReserv = $enfantModel->getLastReserv();

            //for ($i = 0; $i < $data["reservation_nb_enfant"]; $i++) {
            if (!empty($_FILES["carnet-kid"])) {
                $targetDir = "../public/asset/files/";
                $fileName = basename($_FILES["carnet-kid"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                $allowType = array('pdf');

                if (in_array($fileType, $allowType)) {
                    move_uploaded_file($_FILES["carnet-kid"]["tmp_name"], $targetFilePath);
                }
                $carnet = $fileName;
            } else {
                $carnet = NULL;
            }
            if (!empty($_FILES["file-kid"])) {
                $targetDir = "../public/asset/files/";
                $fileName = basename($_FILES["file-kid"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                $allowType = array('pdf');

                if (in_array($fileType, $allowType)) {
                    move_uploaded_file($_FILES["file-kid"]["tmp_name"], $targetFilePath);
                }
                $fichier = $fileName;
            } else {
                $fichier = NULL;
            }
            $commentaireKid = addslashes($data["commentaires-kid"]);

            $dataEnfant = array(
                "user_id" => $_SESSION["user"]->user_id,
                "enfant_nom" => $data["name-kid"],
                "enfant_prenom" => $data["prenom-kid"],
                "enfant_age" => $data["age-kid"],
                "enfant_carnet" => $carnet,
                "enfant_commentaire" => $commentaireKid
            );

            $enfantModel->create($dataEnfant);
            $idEnfant = $enfantModel->getLastKid();
            $enfantModel->createLink($idReserv->reservation_id, $idEnfant->enfant_id);

            $dataDoc = array(
                "enfant_id" => $idEnfant->enfant_id,
                "document_nom" => $fichier,
                "document_fichier" => $fichier
            );

            $enfantModel->createDoc($dataDoc);
            //}
        }
    }
}
