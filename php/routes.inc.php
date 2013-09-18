<?php

$router = Router::getInstance();
//Définition du dossier contenant les controlleur
$router->setPath(PHP_DIR . '/controllers/');
// Si aucun controller n'est spécifié on appèlera user et sa méthode displayDashboard()
$router->setDefaultControllerAction('Homepage', 'display');
$router->setErrorControllerAction('Error', 'indexAction');

$router->load();
