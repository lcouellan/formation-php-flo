<?php

include('../vendor/autoload.php');

use KNPLabs\Controller\CreateDinosaurs;
use KNPLabs\Controller\ListDinosaurs;
use KNPLabs\Controller\Login;
use KNPLabs\Controller\Logout;
use KNPLabs\Real\FilePersister\FileDinosaursPersister;
use KNPLabs\Real\FilePersister\FileUserPersister;
use KNPLabs\Real\FileProvider\FileDinosaursProvider;
use KNPLabs\Real\FileProvider\FileUserProvider;
use KNPLabs\Routing\NotFoundException;
use KNPLabs\Routing\Router;
use KNPLabs\Security\AuthenticatedUserProvider;

$dinosaursProvider = new FileDinosaursProvider("../data/dinosaurs.json");
$dinosaursPersister = new FileDinosaursPersister("../data/dinosaurs.json", $dinosaursProvider);
$userProvider = new FileUserProvider("../data/users.json");
$userPersister = new FileUserPersister("../data/users.json", $userProvider);
$authenticatedUserProvider = new AuthenticatedUserProvider($userProvider);

try {
    $router = new Router();
} catch (RuntimeException $e) {
    echo $e->getMessage();

    return;
}

$router->addController('/', new ListDinosaurs($dinosaursProvider));
$router->addController('/create', new CreateDinosaurs($dinosaursPersister));
$router->addController('/login', new Login($userProvider, $authenticatedUserProvider));
$router->addController('/logout', new Logout());

try {
    $router->handleRequest();
} catch (NotFoundException $e) {
    echo 'Not found';
}
