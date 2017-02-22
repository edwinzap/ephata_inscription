<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 20/02/2017
 * Time: 14:54
 */

namespace App\Core;


class Arrivee
{
    private $id = -1;
    private $heure;

    function __construct($id = -1, $heure=null)
    {
        $this->id=$id;
        $this->heure=$heure;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

}