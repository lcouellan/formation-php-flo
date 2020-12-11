<?php

require_once('Dinosaur.php');

class Tyrannosaurus extends Dinosaur{

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
}
