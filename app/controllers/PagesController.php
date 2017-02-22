<?php

namespace App\Controllers;

use App\Core\Adresse;
use App\Core\Arrivee;
use App\Core\Personne;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PagesController extends BaseController {

    public function getLogin(RequestInterface $request, ResponseInterface $response){
        $this->render($response, 'pages/login.twig', array('title'=>'Bienvenue'));
    }

    public function account(RequestInterface $request, ResponseInterface $response){
        $personnes = array(new Personne('Forget', 'Miguel'), new Personne('Vanwijnsberghe', 'Kwinten'));
        $this->render($response, 'pages/account.twig',
            array(
                'title'=>'Mon Compte',
                'personnes' => $personnes));
    }

    public function postLogin(RequestInterface $request, ResponseInterface $response){
        $exist = $this->utilisateur()->existEmail($request->getParam('email'));

        if ($exist){
            return $this->redirect($response, 'account');
        }
        else{
            return $this->redirect($response,'login');
        }
    }




    //region FormInscription
    public function getFormInscription(RequestInterface $request, ResponseInterface $response, $args){
        $this->render($response, 'pages/formInscription.twig',
            array(
                'title'=>'Inscription',
                'personne'=> $this->personne(),
                'evenementLibelle'=>'2ème WE 14-16',
                'evenementDate'=> 'du 17 au 19 février 2017',
                'arrivees' => array(new Arrivee(1,'19:30'), new Arrivee(2,'20:30')),
            ));
    }

    public function postFormInscription(RequestInterface $request, ResponseInterface $response){
        if (true){
            return $this->redirect($response, 'account');
        }
        else{
            return $this->redirect($response,'formInscription');
        }
    }
    //endregion


}
