<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;

class Spinosaurus extends Dinosaur implements LandDinosaur, SeaDinosaur
{
    private const DINO_GENRE = 'Spinosaurus';

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
    public function swim():string
    {
        return 'je nage';
    }
}
