<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 23/02/2017
 * Time: 12:38
 */

namespace App\Models;


use App\Core\Arrivee;

class ArriveeModel extends BaseModel
{
    public function get($id){
        $t = parent::get('arrivee_gare', $id);
        return $this->createObject($t);
    }

    public function getAllWhereEvenement($idEvenement){
        $query = "SELECT * FROM arrivee_gare as a 
                  INNER JOIN evenement_arrivee_gare as ea ON a.id= ea.id_arrivee_gare  
                  WHERE ea.id_evenement=?";

        $result = parent::fetchAll($query,array($idEvenement));
        $list = [];
        foreach ($result as $item){
            array_push($list,$this->createObject($item));
        }
        return $list;
    }

    private function createObject($obj){

        $arriveeGare = new Arrivee();
        $arriveeGare->setId($obj->id);
        $arriveeGare->setHeure($obj->heure);
        return $arriveeGare;
    }
}

