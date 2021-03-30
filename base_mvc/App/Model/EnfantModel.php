<?php

namespace App\Model;

use Core\Model\Model;

/**
 * @method readAll() | Récupére tous les enfants
 * @method ReadOne(int $id) | Retourne un enfant en fonction de son id
 * @method delete(int $id) | Supprime un enfant en fonction de son id
 * @method create($data) | Enregistre un enfant dans la BDD
 */

class EnfantModel extends Model
{

    /**
     * Nom de la table
     * 
     * @var string
     */
    protected $table = "enfants";


    public function createReserv($data)
    {
        $statement = "INSERT INTO reservation (";
        $values = "VALUES (";
        foreach ($data as $key => $value) {
            $statement .= $key .",";
            $values .= "'". $value ."',";
        }
        $statement = substr($statement,0,-1) . ") ";
        $values = substr($values, 0, -1) . ")";

        $statement .= $values;
        $this->db->postData($statement);
    }

    public function getLastReserv()
    {
        $statement = "SELECT reservation_id FROM reservation ORDER BY reservation_id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }

    public function getLastKid()
    {
        $statement = "SELECT enfant_id FROM enfants ORDER BY enfant_id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }

    public function createLink($idEnfant, $idReserv)
    {
        $statement = "INSERT INTO nbenfant VALUES (" . $idEnfant ."," . $idReserv . ")";
        $this->db->postData($statement); 
    }


}