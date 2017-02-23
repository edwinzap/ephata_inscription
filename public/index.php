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
session_start();

$app = new \Slim\App([
    'settings'=>[
        'displayErrorDetails'=> true
    ]
]);

require('../app/src/container.php');
require('../app/src/router.php');

$app->run();