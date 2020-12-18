<?php

namespace KNPLabs\Controller;

class ViewRenderer
{
    public static function render(string $viewPath, array $parameters = []): void
    {
        extract($parameters);

        require __DIR__ . '/../../views/' . $viewPath;
    }
}
