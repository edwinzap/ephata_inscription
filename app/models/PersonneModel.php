<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 21:26
 */

namespace App\Models;


use App\Core\Personne;

class PersonneModel extends BaseModel
{
    public function insert(Personne $personne){
        $query = 'INSERT INTO personne(nom,prenom,sexe,naissance,telephone1,telephone2,allergie, id_adresse) VALUES(?,?,?,?,?,?,?,?)';
        parent::execute($query,$this->toArray($personne));
        $idPersonne = parent::lastInsertId();

        $this->setUtilisateur($idPersonne, $personne->getUtilisateurId());
        return $idPersonne;
    }

    /**Link Personne to his Utilisateur
     * @param $idPersonne
     * @param $idUtilisateur
     */
    private function setUtilisateur($idPersonne, $idUtilisateur){
        $query = "INSERT INTO utilisateur_personne(id_personne,id_utilisateur) VALUES(?,?)";
        parent::execute($query, array($idPersonne, $idUtilisateur));
    }

    public function get($id){
        $t = parent::get('personne', $id);
        return $this->createObject($t);
    }

    public function update(Personne $personne){
        $query = 'UPDATE personne SET nom= ?,prenom=?,sexe=?,naissance=?,telephone1=?,telephone2=?,allergie=?, id_adresse=? WHERE id=? ';
        $a = $this->toArray($personne);
        array_push($a,$personne->getId());
        parent::execute($query,$a);
    }

    /**Return all Personne where specific id_utilisateur
     * @param $utilisateurId
     * @return array of Personne
     */
    public function getAllWhereUtilisateur($utilisateurId){
        $query = "SELECT * FROM personne WHERE id_utilisateur=?";
        $result = parent::fetchAll($query,array($utilisateurId));
        $list = [];
        foreach ($result as $item){
            array_push($list,$this->createObject($item));
        }
        return $list;
    }

    public function delete($id){
        parent::delete('personne', $id);
    }

    public function exist($id){
        return parent::exist('personne', $id);
    }

    private function toArray(Personne $personne){
        return array(
            $personne->getNom(),
            $personne->getPrenom(),
            $personne->getSexe(),
            $personne->getNaissance(),
            $personne->getTelephone1(),
            $personne->getTelephone2(),
            $personne->getAllergie(),
            $personne->getAdresse()->getId(),
        );
    }

    private function createObject($obj){
        $personne = new Personne();
        $personne->setId($obj->id);
        $personne->setNom($obj->nom);
        $personne->setPrenom($obj->prenom);
        $personne->setSexe($obj->Sexe);
        $personne->setNaissance($obj->naissance);
        $personne->setTelephone1($obj->Telephone1);
        $personne->setTelephone2($obj->Telephone2);
        $personne->setAllergie($obj->Allergie);
        $personne->setUtilisateurId($obj->UtilisateurId);
        return $personne;
    }

}