<?php

namespace KNPLabs\Controller;

class ViewRenderer
{
    /**
     * @param array<mixed> $parameters
     */
    public static function render(string $viewPath, array $parameters = []): void
    {
        extract($parameters);

        require __DIR__ . '/../../views/' . $viewPath;
    }
}
