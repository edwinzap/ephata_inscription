<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 16:57
 */

namespace App\Core;


class Section
{

    private $libelle;
    private $annee_min;
    private $annee_max;

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
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return integer
     */
    public function getAnneeMin()
    {
        return $this->annee_min;
    }

    /**
     * @param integer $annee_min
     */
    public function setAnneeMin($annee_min)
    {
        $this->annee_min = $annee_min;
    }

    /**
     * @return integer
     */
    public function getAnneeMax()
    {
        return $this->annee_max;
    }

    /**
     * @param integer $annee_max
     */
    public function setAnneeMax($annee_max)
    {
        $this->annee_max = $annee_max;
    }

}