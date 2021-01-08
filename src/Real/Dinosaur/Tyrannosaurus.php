<?php

namespace KNPLabs\Real\Dinosaur;

use KNPLabs\Real\Dinosaur;

class Tyrannosaurus extends Dinosaur implements LandDinosaur
{
    private const DINO_GENRE = 'Tyrannosaurus';

    public function roar(): string
    {
        if (!$this->isAdult()) {
            return 'roar..';
        } else {
            if ($this->isMale()) {
                return 'ROOOAAAAAAR!!!!';
            } else {
                return 'GGGGGGRRRROOOOAAAAARRRRRR!!!!';
            }
        }
    }
    public function getRace(): string
    {
        return self::DINO_GENRE;
    }

    public function walk():string
    {
        return 'Je marche';
    }
}
