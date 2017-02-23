<?php

namespace App\Core;
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 16:11
 */
class Adresse
{
    private $Rue;
    private $Numero;
    private $CodePostal;
    private $Boite = null;
    private $Ville;
    private $Pays;



    private $id = -1;

    /**
     * Adresse constructor.
     * @param $Rue
     * @param $Numero
     * @param $CodePostal
     * @param null $Boite
     * @param $Ville
     * @param $Pays
     */
    public function __construct($Rue=null, $Numero=null, $Boite=null, $CodePostal=null, $Ville=null, $Pays=null)
    {
        $this->Rue = $Rue;
        $this->Numero = $Numero;
        $this->Boite = $Boite;
        $this->CodePostal = $CodePostal;
        $this->Ville = $Ville;
        $this->Pays = $Pays;
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
     * @return string
     */
    public function getRue()
    {
        return $this->Rue;
    }

    /**
     * @param string $Rue
     */
    public function setRue($Rue)
    {
        $this->Rue = $Rue;
    }

    /**
     * @return integer
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param integer $Numero
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    /**
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * @param integer $CodePostal
     */
    public function setCodePostal($CodePostal)
    {
        $this->CodePostal = $CodePostal;
    }

    /**
     * @return string
     */
    public function getBoite()
    {
        return $this->Boite;
    }

    /**
     * @param string $Boite
     */
    public function setBoite($Boite)
    {
        $this->Boite = $Boite;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param string $Ville
     */
    public function setVille($Ville)
    {
        $this->Ville = $Ville;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * @param string $Pays
     */
    public function setPays($Pays)
    {
        $this->Pays = $Pays;
    }

}