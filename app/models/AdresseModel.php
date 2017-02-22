<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 21/02/2017
 * Time: 19:58
 */

namespace App\Models;


use App\Core\Adresse;

class AdresseModel extends BaseModel
{
    public function insert(Adresse $adresse){
        $query = 'INSERT INTO adresse(rue, numero, boite, code_postal, ville, pays) VALUES(?,?,?,?,?,?)';
        parent::execute($query,$this->toArray($adresse));
        return parent::lastInsertId();
    }

    public function get($id){
        $t = parent::get('adresse', $id);
        return $this->createObject($t);
    }

    public function delete($id){
        parent::delete('adresse', $id);
    }

    public function exist($id){
        return parent::exist('adresse', $id);
    }

    public function update(Personne $adresse){
        $query = 'UPDATE adresse SET rue=?, numero=?, boite=?, code_postal=?, ville=?, pays=? WHERE id=? ';
        $a = $this->toArray($adresse);
        array_push($a,$adresse->getId());
        parent::execute($query,$a);
    }

    private function toArray(Adresse $adresse){
        return array(
            $adresse->getRue(),
            $adresse->getNumero(),
            $adresse->getBoite(),
            $adresse->getCodePostal(),
            $adresse->getVille(),
            $adresse->getPays(),
        );
    }

    private function createObject($obj){
        $adresse = new Adresse();
        $adresse->setId($obj->id);
        $adresse->setRue($obj->rue);
        $adresse->setNumero($obj->numero);
        $adresse->setBoite($obj->boite);
        $adresse->setCodePostal($obj->code_postal);
        $adresse->setVille($obj->ville);
        $adresse->setPays($obj->pays);
        return $adresse;
    }

}