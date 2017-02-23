<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 21:26
 */

namespace App\Models;


use App\Core\Evenement;
use App\Models\SectionModel;


class EvenementModel extends BaseModel
{
    private $sectionModel;

    public function __construct()
    {
        parent::__construct();
        $this->sectionModel = new SectionModel();
        $this->arriveeModel = new ArriveeModel();
    }


    /**Get Evenement by his Id
     * @param $id
     * @return Evenement
     */
    public function get($id){
        $t = parent::get('evenement', $id);
        return $this->createObject($t);
    }

    /**Get all Evenements
     * @return array of Evenement
     */
    public function getAll(){
        $query = 'SELECT * FROM evenement';
        $t = $this->fetchAll($query);
        $evenements = [];
        foreach ($t as $obj){
            array_push($evenements,$this->createObject($obj));
        }
        return $evenements;
    }

    /**Insert Evenement into table 'evenement'
     * @param Evenement $evenement
     */
    public function insert(\App\Core\Evenement $evenement){
        $query = 'INSERT INTO evenement(libelle, date_debut,date_fin,id_section,places) VALUES(?,?,?,?,?)';
        $this->execute($query,$this->toArray($evenement));
    }

    /**Delete Evenement with specific ID
     * @param $id
     */
    public function delete($id){
        $query = 'DELETE FROM evenement WHERE id=?';
        $this->execute($query,$id);
    }

    /**Create an object Evenement from a query object
     * @param $obj Object from query
     * @return Evenement
     */
    private function createObject($obj){

        $evenement = new Evenement();
        $evenement->setId($obj->id);
        $evenement->setDateDebut($obj->date_debut);
        $evenement->setDateFin($obj->date_fin);
        $evenement->setPlaces($obj->places);
        $evenement->setSection($this->sectionModel->get($obj->id_section));
        $evenement->setArriveesGare($this->arriveeModel->getAllWhereEvenement($obj->id));
        return $evenement;
    }

    /**Get an array of values from Evenement porperties
     * @param Evenement $evenement
     * @return array
     */
    private function toArray(Evenement $evenement){
        return array(
            $evenement->getLibelle(),
            $evenement->getDateDebut(),
            $evenement->getDateFin(),
            $evenement->getSection()->getId(),
            $evenement->getPlaces()
        );
    }
}