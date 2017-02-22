<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 16:58
 */

namespace App\Core;


use App\Models\SectionModel;

class Evenement
{
    private $libelle;
    private $date_debut;
    private $date_fin;
    private $places = null;
    private $section;
    private $arrivees_gare;


    function __construct()
    {
        $this->section= new SectionModel();
        $this->arrivees_gare = [];
    }

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
     * @return array
     */
    public function getArriveesGare()
    {
        return $this->arrivees_gare;
    }

    /**
     * @param array $arrivees_gare
     */
    public function setArriveesGare($arrivees_gare)
    {
        $this->arrivees_gare = $arrivees_gare;
    }

    /**
     * @return SectionModel
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param SectionModel $section
     */
    public function setSection($section)
    {
        $this->section = $section;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * @param mixed $places
     */
    public function setPlaces($places)
    {
        $this->places = $places;
    }


}