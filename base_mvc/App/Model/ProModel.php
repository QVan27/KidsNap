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
    protected $table = "pro";

    /**
     * Compte tous les professionnels
     */
    public function countAll()
    {
        $statement = "SELECT COUNT(*) AS allPros FROM pro";
        return $this->db->getData($statement, true);
    }

    public function getLast()
    {
        $statement = "SELECT pro_id FROM pro ORDER BY pro_id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }

 }