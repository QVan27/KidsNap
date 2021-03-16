<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method readAll() | Récupére tous les utilisateurs
 * @method ReadOne(int $id) | Retourne un utilisateur en fonction de son id
 * @method delete(int $id) | Supprime un utilisateur en fonction de son id
 * @method create($data) | Enregistre un utilisateur dans la BDD
 */

 class UserModel extends Model{

    /**
     * Nom de la table
     * 
     * @var string
     */
    protected $table = "users";

    /**
     * Compte tous les utilisateurs
     */
    public function countAll()
    {
        $statement = "SELECT COUNT(*) AS allUser FROM users";
        return $this->db->getData($statement, true);
    }

 }