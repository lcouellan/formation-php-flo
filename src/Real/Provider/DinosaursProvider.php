<?php

namespace KNPLabs\Real\Provider;

use KNPLabs\Real\Dinosaur;

interface DinosaursProvider
{
    /**
     * @return array<Dinosaur>
     */
    public function all(): array;

    /**
     * @return array<Dinosaur>
     */
    public function searchByName(string $name): array;
}
