<?php

namespace App\Models;

use PDO;
use Slim\Exception\SlimException;

/**
 * Abstract Class Model using PDO to query the database
 *
 * @author forge
 */
abstract class BaseModel {

    private $pdo;

    protected function getPDO() {
        return $this->pdo;
    }

    public function __construct() {
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=ephata_inscription', 'miguel', 'test123');
            //$this->pdo = new PDO('mysql:host=localhost;dbname=ephata_inscription', 'root');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(\Exception $ex){
            echo 'Erreur ! Impossible de se connecter à la base de données';
            die();
    }
    }


    /**
     * @param $query SQL Query
     * @param array $params parameters of the query
     */
    protected function execute($query, array $params =[] ){
        $stmt = $this->pdo->prepare($query);
        foreach ($params as $key=>&$val){
            $stmt->bindParam($key+1,$val);
        }
        $stmt->execute();
        return $stmt;
    }

    protected function lastInsertId(){
        return $this->pdo->lastInsertId();
    }

    /**
     * @param $query
     * @param array $params
     * @return One object, result of the query
     */
    protected function fetch($query, array $params = []){
        $stmt = $this->execute($query, $params);
        return $stmt->fetchObject();
    }

    /**
     * @param $query SQL Query
     * @param array $params parameters of the query
     * @return array of objects, result of the query
     */
    protected function fetchAll($query, array $params = []){
        $stmt = $this->execute($query, $params);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**Describe the table, get infos (column name, type,...)
     * @param $table
     * @return array
     */
    protected function describe($table){
        $stmt= $this->pdo->prepare('DESCRIBE ?');
        $stmt->bindParam($table);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    protected function exist($table, $id){
        $query = 'SELECT COUNT(*) as count FROM ' .$table.' WHERE id= ?';
        $t = $this->fetch($query, array($id));
        if ($t->count == 0){
            return false;
        }
        else{
            return true;
        }
    }

    public function delete($table, $id){
        $query = 'UPDATE ' .$table. ' SET deleted=1 WHERE id=?';
        $this->execute($query, array($id));
    }

    public function get($table, $id){
        $query = 'SELECT * FROM ' .$table. ' WHERE id= ?';
        return $this->fetch($query, array($id));
    }
}
