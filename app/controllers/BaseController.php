<?php
/**
 * Created by IntelliJ IDEA.
 * User: forge
 * Date: 15/02/2017
 * Time: 21:03
 */

namespace App\Controllers;

use App\Models\BaseModel;
use App\Models\UtilisateurModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BaseController
{
    private $container;

    public function __construct($container) {

        $this->container = $container;
    }

    public function render(ResponseInterface $response, $file, array $params = []){
        $this->container->view->render($response, $file, $params);
    }

    public function redirect(ResponseInterface $response, $route, $args=[]){
        return $response->withStatus(302)->withHeader('Location', $this->container->router->pathFor($route,$args));
    }

    public function __get($name)
    {
        return $this->container->get($name);
    }

    protected function utilisateur(){
        return $this->container->utilisateur;
    }

    protected function personne(){
        return $this->container->personne;
    }

    protected function adresse(){
        return $this->container->adresse;
    }

}