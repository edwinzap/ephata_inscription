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
    private $dateDebut;
    private $dateFin;
    private $places = null;
    private $section;
    private $arriveesGare;

    public function __construct($libelle=null, $dateDebut=null, $dateFin=null)
    {
        $this->libelle=$libelle;
        $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
       // $this->section= new Section();
       // $this->arriveesGare = [];
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
        return $this->arriveesGare;
    }

    /**
     * @param array $arriveesGare
     */
    public function setArriveesGare($arriveesGare)
    {
        $this->arriveesGare = $arriveesGare;
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
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
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

    public function getDate(){
        return $this->dateDebut .' - '. $this->dateFin;
    }

}