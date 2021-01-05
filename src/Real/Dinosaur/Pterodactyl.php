<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;

class Pterodactyl extends Dinosaur implements LandDinosaur, FlyingDinosaur
{
    private const DINO_GENRE = 'Pterodactyl';

    public function roar(): string
    {
        return $this->isAdult() ? 'MOOOOOOOO!!!!' : 'moo...';
    }
    public function getRace(): string
    {
        return self::DINO_GENRE;
    }
    public function walk():string
    {
        return 'Je marche';
    }
    public function fly():string
    {
        return 'je vole';
    }
}
