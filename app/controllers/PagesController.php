<?php

namespace App\Controllers;

use App\Core\Adresse;
use App\Core\Arrivee;
use App\Core\Personne;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PagesController extends BaseController {



    public function account(RequestInterface $request, ResponseInterface $response){
        $personnes = $this->personne()->getAllWhereUtilisateur(1);
        $this->render($response, 'pages/account.twig',
            array(
                'title'=>'Mon Compte',
                'personnes' => $personnes));
    }






}
