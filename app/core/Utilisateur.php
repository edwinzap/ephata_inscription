<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 16:21
 */

namespace App\Core;


class Utilisateur
{
    private $email;
    private $valide = false;
    private $personnes;

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

    function __construct()
    {
        $this->personnes=[];
    }

    /**
     * @return array
     */
    public function getPersonnes()
    {
        return $this->personnes;
    }

    /**
     * @param array $personnes
     */
    public function setPersonnes($personnes)
    {
        $this->personnes = $personnes;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isValide()
    {
        return $this->valide;
    }

    /**
     * @param bool $valide
     */
    public function setValide($valide)
    {
        $this->valide = $valide;
    }

}