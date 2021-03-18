<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method readAll() | Récupére tous les parents
 * @method ReadOne(int $id) | Retourne un parent en fonction de son id
 * @method delete(int $id) | Supprime un parent en fonction de son id
 * @method create($data) | Enregistre un parent dans la BDD
 */

 class ParentModel extends Model{

    /**
     * Nom de la table
     * 
     * @var string
     */
    protected $table = "parents";

    /**
     * Compte tous les parents
     */
    public function getLast()
    {
        $statement = "SELECT parent_id FROM parents ORDER BY parent_id DESC LIMIT 1";
        return $this->db->getData($statement, true);
    }

 }