<?php

namespace KNPLabs\Routing;

interface Controller
{
    public function handleRequest(): void;
}
