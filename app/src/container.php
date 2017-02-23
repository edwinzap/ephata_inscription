<?php

$container = $app->getContainer();

$container['view'] = function ($container) {
    $dir = dirname(__DIR__);
    $view = new \Slim\Views\Twig($dir . '/views', [
        'cache' => false //$dir . '/tmp/cache'
    ]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['utilisateur'] = new \App\Models\UtilisateurModel();
$container['personne']= new App\Models\PersonneModel();
$container['adresse']= new App\Models\AdresseModel();
$container['inscription']= new App\Models\InscriptionModel();
$container['evenement']= new App\Models\EvenementModel();
$container['section']= new App\Models\EvenementModel();
$container['arrivee']= new App\Models\EvenementModel();