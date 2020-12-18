<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;

class Triceratops extends Dinosaur implements LandDinosaur{

private const DINO_GENRE = 'Triceratops';

public function roar(): string{
    return $this->isAdult() ? 'MOOOOOOOO!!!!' : 'moo...';
}
public function getRace(): string{
    return self::DINO_GENRE;
}
public function walk():string{
    return 'Je marche';
}
}
