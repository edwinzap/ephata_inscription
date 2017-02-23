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

    const TRANSPORT_TRAIN = 0;
    const TRANSPORT_VOITURE = 1;
    const TRANSPORT_AUTRE = 2;

    const PAIEMENT_VIREMENT = 0;
    const PAIEMENT_SURPLACE = 1;

    private $id = -1;
    private $transport;
    private $paiement;
    private $gareDepart;
    private $arriveeGare;
    private $villeDepart;
    private $placeLibre;
    private $commentaire;
    private $personne;
    private $evenement;

    /**
     * Inscription constructor.
     * @param $transport
     * @param $paiement
     * @param $gare_depart
     * @param $arrivee_gare
     * @param $ville_depart
     * @param $place_libre
     * @param $commentaire
     * @param $personne
     * @param $evenement
     */
    public function __construct($transport=null, $paiement=null, $commentaire=null, $personne=null,$evenement=null,
                                $gare_depart=null, $arrivee_gare=null, $ville_depart=null, $place_libre=null)
    {
        $this->transport = $transport;
        $this->paiement = $paiement;
        $this->gareDepart = $gare_depart;
        $this->arriveeGare = $arrivee_gare;
        $this->villeDepart = $ville_depart;
        $this->placeLibre = $place_libre;
        $this->commentaire = $commentaire;
        $this->personne = $personne;
        $this->evenement = $evenement;
    }

    public static function getConstTransportTrain(){
        return self::TRANSPORT_TRAIN;
    }
    public static function getConstTransportVoiture(){
        return self::TRANSPORT_VOITURE;
    }
    public static function getConstTransportAutre(){
        return self::TRANSPORT_AUTRE;
    }

    public static function getConstPaiementVirement(){
        return self::PAIEMENT_VIREMENT;
    }
    public static function getConstPaiementSurPlace(){
        return self::PAIEMENT_SURPLACE;
    }

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
        return $this->villeDepart;
    }

    /**
     * @param mixed $villeDepart
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;
    }

    /**
     * @return mixed
     */
    public function getPlaceLibre()
    {
        return $this->placeLibre;
    }

    /**
     * @param mixed $placeLibre
     */
    public function setPlaceLibre($placeLibre)
    {
        $this->placeLibre = $placeLibre;
    }

    /**
     * @return mixed
     */
    public function getGareDepart()
    {
        return $this->gareDepart;
    }

    /**
     * @param mixed $gareDepart
     */
    public function setGareDepart($gareDepart)
    {
        $this->gareDepart = $gareDepart;
    }

    /**
     * @return mixed
     */
    public function getArriveeGare()
    {
        return $this->arriveeGare;
    }

    /**
     * @param mixed $arriveeGare
     */
    public function setArriveeGare($arriveeGare)
    {
        $this->arriveeGare = $arriveeGare;
    }



}