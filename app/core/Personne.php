<?php

namespace App\Core;

/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 16:08
 */



class Personne
{

    private $id = -1;
    private $Nom;
    private $Prenom;
    private $Naissance;
    private $Sexe;
    private $Telephone1;
    private $Telephone2;
    private $Allergie;
    private $Adresse;
    private $UtilisateurId = -1;

    /**
     * Personne constructor.
     * @param $Nom
     * @param $Prenom
     * @param $Naissance
     * @param $Sexe
     * @param $Telephone1
     * @param $Telephone2
     * @param $Allergie
     */
    public function __construct($Nom=null, $Prenom=null,  $Sexe=null, $Naissance=null, $Telephone1=null, $Telephone2=null, $Allergie=null)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Naissance = $Naissance;
        $this->Sexe = $Sexe;
        $this->Telephone1 = $Telephone1;
        $this->Telephone2 = $Telephone2;
        $this->Allergie = $Allergie;
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
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    /**
     * @return datetime
     */
    public function getNaissance()
    {
        return $this->Naissance;
    }

    /**
     * @param datetime $Naissance
     */
    public function setNaissance($Naissance)
    {
        $this->Naissance = $Naissance;
    }

    /**
     * @return boolean
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * @param boolean $Sexe
     */
    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;
    }

    /**
     * @return string
     */
    public function getTelephone1()
    {
        return $this->Telephone1;
    }

    /**
     * @param string $Telephone1
     */
    public function setTelephone1($Telephone1)
    {
        $this->Telephone1 = $Telephone1;
    }

    /**
     * @return string
     */
    public function getTelephone2()
    {
        return $this->Telephone2;
    }

    /**
     * @param string $Telephone2
     */
    public function setTelephone2($Telephone2)
    {
        $this->Telephone2 = $Telephone2;
    }

    /**
     * @return string
     */
    public function getAllergie()
    {
        return $this->Allergie;
    }

    /**
     * @param string $Allergie
     */
    public function setAllergie($Allergie)
    {
        $this->Allergie = $Allergie;
    }

    /**
     * @return Adresse
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param Adresse $Adresse
     */
    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurId()
    {
        return $this->UtilisateurId;
    }

    /**
     * @param mixed $UtilisateurId
     */
    public function setUtilisateurId($UtilisateurId)
    {
        $this->UtilisateurId = $UtilisateurId;
    }


}