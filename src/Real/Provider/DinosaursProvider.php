<?php

namespace KNPLabs\Real\Provider;

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
