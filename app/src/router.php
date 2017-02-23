<?php

use App\Controllers\PagesController;
use App\Controllers\PersonneController;
use App\Controllers\InscriptionController;
use App\Controllers\UtilisateurController;

$app->get('/', UtilisateurController::class . ':getLogin') ->setName('login');
$app->post('/', UtilisateurController::class . ':postLogin');
$app->get('/account', PagesController::class . ':account') ->setName('account');
$app->get('/formPersonne', PersonneController::class . ':getFormPersonne')->setName('formPersonne');
$app->post('/formPersonne', PersonneController::class . ':postFormPersonne');
$app->get('/formInscription/{id}', InscriptionController::class . ':getFormInscription') ->setName('formInscription');
$app->post('/formInscription/{id}',InscriptionController::class . ':postFormInscription');
