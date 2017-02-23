<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 21/02/2017
 * Time: 19:54
 */

namespace App\Controllers;

use App\Core\Adresse;
use App\Core\Personne;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PersonneController extends BaseController
{
    //region FormPersonne
    public function getFormPersonne(RequestInterface $request, ResponseInterface $response){
        $this->render($response, 'pages/formPersonne.twig',
            array('title'=>'Nouvel Ephatien')
        );
    }

    public function postFormPersonne(RequestInterface $request, ResponseInterface $response){
        $p = $request->getParams();

        $adresse = new Adresse($p['rue'], $p['numero'], $p['boite'], $p['codePostal'], $p['ville'], $p['pays']);
        $personne = new Personne($p['nom'], $p['prenom'], $p['sexe'], $p['naissance'], $p['telephone1'], $p['telephone2'], $p['allergie']);
        $personne->setAdresse($adresse);
        $personne->setUtilisateurId($_SESSION['idUtilisateur']);

        $this->personne()->insert($personne);

        if (true){
            return $this->redirect($response, 'account');
        }
        else{
            return $this->redirect($response,'formPersonne');
        }
    }
    //endregion
}