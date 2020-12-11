<?php

require_once('Dinosaur.php');

class Triceratops extends Dinosaur{

private const DINO_GENRE = 'Triceratops';

public function roar(): string{
    return $this->isAdult() ? 'MOOOOOOOO!!!!' : 'moo...';
}
public function getRace(): string{
    return self::DINO_GENRE;
}
}
