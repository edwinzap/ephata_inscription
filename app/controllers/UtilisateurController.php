<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 22/02/2017
 * Time: 23:39
 */

namespace App\Controllers;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class UtilisateurController extends BaseController
{
    public function getLogin(RequestInterface $request, ResponseInterface $response){
        $this->render($response, 'pages/login.twig', array('title'=>'Bienvenue'));
    }

    public function postLogin(RequestInterface $request, ResponseInterface $response){
        $exist = $this->utilisateur()->existEmail($request->getParam('email'));

        if ($exist){
            $id = $this->utilisateur()->getWhereEmail($request->getParam('email'));
            $_SESSION['idUtilisateur']=$id;

            return $this->redirect($response, 'account');
        }
        else{
            return $this->redirect($response,'login');
        }
    }
}