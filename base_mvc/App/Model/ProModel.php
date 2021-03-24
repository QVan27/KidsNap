<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method readAll() | Récupére tous les professionnels
 * @method ReadOne(int $id) | Retourne un professionnel en fonction de son id
 * @method delete(int $id) | Supprime un professionnels en fonction de son id
 * @method create($data) | Enregistre un professionnels dans la BDD
 */

 class ProModel extends Model{

    /**
     * Nom de la table
     * 
     * @var string
     */
    protected $table = "pros";

    /**
     * Compte tous les professionnels
     */
    public function countAll()
    {
        $statement = "SELECT COUNT(*) AS allPros FROM pros";
        return $this->db->getData($statement, true);
    }

    public function getLast()
    {
        $statement = "SELECT pro_id FROM pros ORDER BY pro_id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }

    public function existingPro($email, $rolePro)
    {
        $statement = "SELECT * FROM users WHERE user_mail = '$email' AND user_pro = '$rolePro'";
        return $this->db->getData($statement, true);
    }

    public function update($id, $rolePro)
    {
        $statement = "UPDATE users SET user_pro = '$rolePro' WHERE user_id = '$id'";
        return $this->db->postData($statement, $rolePro);
    }

    public function getUserPro($id)
    {
        $statement = "SELECT * FROM users WHERE user_id = '$id'";
        return $this->db->getData($statement, true);
    }

    public function getMapPro($id)
    {
        $statement = "SELECT * FROM map WHERE user_id = '$id'";
        return $this->db->getData($statement, true);
    }

 }