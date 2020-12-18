<?php

include('../vendor/autoload.php');

use KNPLabs\Controller\ListDinosaurs;
use KNPLabs\Routing\NotFoundException;
use KNPLabs\Routing\Router;

try {
    $router = new Router();
} catch (RuntimeException $e) {
    echo $e->getMessage();

    return;
}

$router->addController('/', new ListDinosaurs());

try {
    $router->handleRequest();
} catch (NotFoundException $e) {
    echo 'Not found';
}
