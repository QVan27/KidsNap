<?php
namespace App\Model;

use Core\Model\Model;

/**
 * @method readAll() | Récupére tous les professionnels
 * @method ReadOne(int $id) | Retourne un professionnel en fonction de son id
 * @method delete(int $id) | Supprime un professionnels en fonction de son id
 * @method create($data) | Enregistre un professionnels dans la BDD
 */

 class MapModel extends Model{

    /**
     * Nom de la table
     * 
     * @var string
     */
    protected $table = "map";

    /**
     * Compte tous les professionnels
     */
    public function map()
    {
        $statement = 'SELECT id, nom, lat, lon, ( 6371 * acos( cos( radians(:lat) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians(:lon) ) + sin( radians(:lat) ) * sin( radians( lat ) ) ) ) AS distance FROM `map` HAVING distance < :distance ORDER BY distance';
        return $this->db->getData($statement);
    }


 }