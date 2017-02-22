<?php
/*
 * Serveur php: 
 * php -S localhost:8080 -t public -ddisplay_errors=1
 * composer require slim/slim "^3.0"
 * composer require slim/twig-view
 */

use App\Controllers\PagesController;
use App\Controllers\PersonneController;
use App\Models\Utilisateurs;
require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings'=>[
        'displayErrorDetails'=> true
    ]
]);

require('../app/container.php');

$app->get('/', PagesController::class . ':getLogin') ->setName('login');
$app->post('/', PagesController::class . ':postLogin');
$app->get('/account', PagesController::class . ':account') ->setName('account');
$app->get('/formPersonne', PersonneController::class . ':getFormPersonne')->setName('formPersonne');
$app->post('/formPersonne', PersonneController::class . ':postFormPersonne');
$app->get('/formInscription/{id}', PagesController::class . ':getFormInscription') ->setName('formInscription');
$app->post('/formInscription', PagesController::class . ':postFormInscription');
$app->run();