<?php

namespace KNPLabs\Routing;

use RuntimeException;

class Router
{
    private string $currentURL;

    /**
     * @var array<Controller>
     */
    private array $controllers;

    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            $this->currentURL = $_SERVER['REQUEST_URI'];
        } else {
            throw new RuntimeException('The Router can only be used on a server context.');
        }

        $this->controllers = [];
    }

    public function addController(string $path, Controller $controller): void
    {
        $this->controllers[$path] = $controller;
    }

    public function handleRequest(): void
    {
        $currentRoute = explode('?', $this->currentURL)[0];
        foreach ($this->controllers as $route => $controller) {
            if ($currentRoute === $route) {
                $controller->handleRequest();

                return;
            }
        }

        throw new NotFoundException();
    }
}
