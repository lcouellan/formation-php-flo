<?php

include('../vendor/autoload.php');

use KNPLabs\Controller\ListDinosaurs;
use KNPLabs\Real\FakeProvider\FakeDinosaursProvider;
use KNPLabs\Routing\NotFoundException;
use KNPLabs\Routing\Router;

$dinosaursProvider = new FakeDinosaursProvider();

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
