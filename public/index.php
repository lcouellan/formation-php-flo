<?php

include('../vendor/autoload.php');

use KNPLabs\Controller\ListDinosaurs;
use KNPLabs\Real\FileProvider\FileDinosaursProvider;
use KNPLabs\Routing\NotFoundException;
use KNPLabs\Routing\Router;

$dinosaursProvider = new FileDinosaursProvider("../data/dinosaurs.json");

try {
    $router = new Router();
} catch (RuntimeException $e) {
    echo $e->getMessage();

    return;
}

$router->addController('/', new ListDinosaurs($dinosaursProvider));

try {
    $router->handleRequest();
} catch (NotFoundException $e) {
    echo 'Not found';
}
