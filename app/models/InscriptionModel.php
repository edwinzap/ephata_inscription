<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 21:26
 */

namespace App\Models;


use App\Core\Inscription;

class InscriptionModel extends BaseModel
{
    public function insert(Inscription $inscription){
        $query = 'INSERT INTO inscription(transport, paiement, gare_depart,id_arrivee_gare,ville_depart,place_libre,commentaire, id_personne,id_evenement) 
                  VALUES(?,?,?,?,?,?,?,?,?)';
        parent::execute($query,$this->toArray($inscription));
    }

    private function toArray(Inscription $inscription){
        return array(
            $inscription->getTransport(),
            $inscription->getPaiement(),
            $inscription->getGareDepart(),
            $inscription->getArriveeGare(),
            $inscription->getVilleDepart(),
            $inscription->getPlaceLibre(),
            $inscription->getCommentaire(),
            $inscription->getPersonne()->getId(),
            $inscription->getEvenement()->getId(),
        );
    }

    private function createObject($obj){
        $inscription = new Inscription();
        $inscription->setTransport($obj->transport);
        $inscription->setPaiement($obj->paiement);
        $inscription->setGareDepart($obj->gare_depart);
        $inscription->setVilleDepart($obj->ville_depart);
        $inscription->setCommentaire($obj->commentaire);
        return $inscription;
    }


}