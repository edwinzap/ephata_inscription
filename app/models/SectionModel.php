<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 16/02/2017
 * Time: 21:26
 */

namespace App\Models;


use App\Core\Section;

class SectionModel extends BaseModel
{
    public function get($id){
        $t = parent::get('section', $id);
        return $this->createObject($t);
    }

    private function createObject($obj){

        $section = new Section();
        $section->setId($obj->id);
        $section->setLibelle($obj->libelle);
        $section->setAnneeMin($obj->annee_min);
        $section->setAnneeMax($obj->annee_max);
        return $section;
    }
}