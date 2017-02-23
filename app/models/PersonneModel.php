<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 21:26
 */

namespace App\Models;


use App\Core\Personne;
use DateTime;

class PersonneModel extends BaseModel
{
    private $adresseModel;

    public function __construct()
    {
        parent::__construct();
        $this->adresseModel = new AdresseModel();
    }

    public function insert(Personne $personne){
        $idAdresse = $this->adresseModel->insert($personne->getAdresse());
        $personne->getAdresse()->setId($idAdresse);

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
        $query = 'UPDATE personne SET nom= ?,prenom=?,sexe=?,naissance=STR_TO_DATE(?, \'%d/%m/%Y\'),telephone1=?,telephone2=?,allergie=?, id_adresse=? WHERE id=? ';
        $a = $this->toArray($personne);
        array_push($a,$personne->getId());
        parent::execute($query,$a);
    }

    /**Return all Personne where specific id_utilisateur
     * @param $idUtilisateur
     * @return array of Personne
     */
    public function getAllWhereUtilisateur($idUtilisateur){
        $query = "SELECT * FROM personne as p 
                  INNER JOIN utilisateur_personne as up ON p.id= up.id_personne  
                  WHERE up.id_utilisateur=?";
        $result = parent::fetchAll($query,array($idUtilisateur));
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
            DateTime::createFromFormat('d/m/Y',$personne->getNaissance())->format('Y-m-d'), //Convertit la date en format compréhensible par la DataBase
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
        $personne->setSexe($obj->sexe);
        $personne->setNaissance($obj->naissance);
        $personne->setTelephone1($obj->telephone1);
        $personne->setTelephone2($obj->telephone2);
        $personne->setAllergie($obj->allergie);
        $personne->setAdresse($this->adresseModel->get($obj->id_adresse));
        return $personne;
    }

}