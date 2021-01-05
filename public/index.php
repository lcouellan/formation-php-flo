<?php

include('../vendor/autoload.php');

use KNPLabs\Controller\CreateDinosaurs;
use KNPLabs\Controller\ListDinosaurs;
use KNPLabs\Real\FilePersister\FileDinosaursPersister;
use KNPLabs\Real\FileProvider\FileDinosaursProvider;
use KNPLabs\Routing\NotFoundException;
use KNPLabs\Routing\Router;

$dinosaursProvider = new FileDinosaursProvider("../data/dinosaurs.json");
$dinosaursPersister = new FileDinosaursPersister("../data/dinosaurs.json", $dinosaursProvider);
try {
    $router = new Router();
} catch (RuntimeException $e) {
    echo $e->getMessage();

    return;
}

$router->addController('/', new ListDinosaurs($dinosaursProvider));
$router->addController('/create', new CreateDinosaurs($dinosaursPersister));

try {
    $router->handleRequest();
} catch (NotFoundException $e) {
    echo 'Not found';
}
