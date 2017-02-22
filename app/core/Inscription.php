<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 17:00
 */

namespace App\Core;


class Inscription
{
    private $personne;
    private $evenement;
    private $commentaire;
    private $paiement;
    private $transport;
    private $ville_depart;
    private $place_libre;
    private $gare_depart;
    private $arrivee_gare;

    private $id = -1;
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * @param mixed $personne
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }

    /**
     * @return mixed
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * @param mixed $evenement
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * @param mixed $paiement
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;
    }

    /**
     * @return mixed
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param mixed $transport
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
    }

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->ville_depart;
    }

    /**
     * @param mixed $ville_depart
     */
    public function setVilleDepart($ville_depart)
    {
        $this->ville_depart = $ville_depart;
    }

    /**
     * @return mixed
     */
    public function getPlaceLibre()
    {
        return $this->place_libre;
    }

    /**
     * @param mixed $place_libre
     */
    public function setPlaceLibre($place_libre)
    {
        $this->place_libre = $place_libre;
    }

    /**
     * @return mixed
     */
    public function getGareDepart()
    {
        return $this->gare_depart;
    }

    /**
     * @param mixed $gare_depart
     */
    public function setGareDepart($gare_depart)
    {
        $this->gare_depart = $gare_depart;
    }

    /**
     * @return mixed
     */
    public function getArriveeGare()
    {
        return $this->arrivee_gare;
    }

    /**
     * @param mixed $arrivee_gare
     */
    public function setArriveeGare($arrivee_gare)
    {
        $this->arrivee_gare = $arrivee_gare;
    }


}