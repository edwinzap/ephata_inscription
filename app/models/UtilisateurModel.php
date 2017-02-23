<?php

namespace App\Models;

/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 15/02/2017
 * Time: 21:39
 */
class UtilisateurModel extends BaseModel
{
    public function validate($id){
        $query = 'UPDATE utilisateur SET valide=1 WHERE id=?';
        $this->execute($query, array($id));
    }

    public function delete($id){
        $this->delete('utilisateur', $id);
    }

    public function insert($email){
        $query = 'INSERT INTO utilisateur(email) VALUES (?)';
        $this->query($query, array($email));
    }

    public function existEmail($email){
        $query = 'SELECT COUNT(*) as count FROM utilisateur WHERE email=?';
        $t = $this->fetch($query, array($email));
        if ($t->count == 0){
            return false;
        }
        else{
            return true;
        }
    }

    public function getWhereEmail($email){
       $query = 'SELECT id FROM utilisateur WHERE email=?';
       $obj = parent::fetch($query, array($email));
       return $obj->id;
    }

    public function get($id){
        $t = parent::get('utilisateur', $id);
        return $this->createObject($t);
    }
}