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

    public function getLast()
    {
        $statement = "SELECT user_id FROM users WHERE user_pro = true ORDER BY created_at DESC LIMIT 1 ";
        return $this->db->getData($statement, true);
    }

    /**
     * Récupère un utilisateur en fonction de son email
     *
     * @param string $email
     * @return object
     */
    public function getUserByMail(string $email):object
    {
        $statement = "SELECT * FROM users WHERE user_mail = '$email'";
        return $this->db->getData($statement, true);
    }

    public function existingUser($email, $roleParent)
    {
        $statement = "SELECT * FROM users WHERE user_mail = '$email' AND user_parent = '$roleParent'";
        return $this->db->getData($statement, true);
    }

    public function update($id, $roleParent)
    {
        $statement = "UPDATE users SET user_parent = '$roleParent' WHERE user_id = '$id'";
        return $this->db->postData($statement, $roleParent);
    }

 }