<?php

namespace KNPLabs\Controller;

use KNPLabs\Real\Provider\UserProvider;
use KNPLabs\Routing\Controller;
use KNPLabs\Security\AuthenticatedUserProvider;

class Logout implements Controller
{
    public function __construct()
    {
    }

    public function handleRequest(): void
    {
        session_start();
        session_destroy();

        header('Location: http://localhost/login');
       
        return;
    }
}
