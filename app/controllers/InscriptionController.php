<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 22/02/2017
 * Time: 22:33
 */

namespace App\Controllers;
use App\Core\Arrivee;

use App\Core\Evenement;
use App\Core\Inscription;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class InscriptionController extends BaseController
{
    public function getFormInscription(RequestInterface $request, ResponseInterface $response, $args){
        $this->render($response, 'pages/formInscription.twig',
            array(
                'title'=>'Inscription',
                'personne'=> $this->personne()->get($args['id']),
                'evenement'=>$this->evenement()->get(2),
                'inscription'=>new Inscription()
            ));
    }

    public function postFormInscription(RequestInterface $request, ResponseInterface $response, $args){
        $p = $request->getParams();

        $inscription = new Inscription($p['transport'], $p['paiement'], $p['commentaire'], $this->personne()->get($args['id']), $this->evenement()->get($p['evenement']));

        switch($inscription->getTransport()){
            case $inscription->getConstTransportTrain():
                $inscription->setGareDepart($p['gareDepart']);
                $inscription->setArriveeGare($p['arriveeGare']);
                break;
            case $inscription->getConstTransportVoiture():
                $inscription->setVilleDepart($p['villeDepart']);
                $inscription->setPlaceLibre($p['placeLibre']);
                break;
            default:
                break;
        }
        $this->inscription()->insert($inscription);

        if (true){
            return $this->redirect($response, 'account');
        }
        else{
            return $this->redirect($response,'formInscription');
        }
    }
}