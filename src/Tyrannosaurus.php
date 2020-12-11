<?php
require_once('../src/LandDinosaur.php');
class Tyrannosaurus extends Dinosaur implements LandDinosaur{

private const DINO_GENRE = 'Tyrannosaurus';

public function roar(): string{

    if (!$this->isAdult()){
        return 'roar..';
    }else{
        if ($this->isMale()) {
            return 'ROOOAAAAAAR!!!!';
        }elseif($this->isFemale()){
            return 'GGGGGGRRRROOOOAAAAARRRRRR!!!!';
        }
    }

}
public function getRace(): string{
    return self::DINO_GENRE;
}

public function walk():string{
    return 'Je marche';
}

}
