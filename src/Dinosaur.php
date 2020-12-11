<?php
class Dinosaur{

    private string $name;
    private string $gender;
    private int $age;
    private const MAJOR_AGE = 21;

    public function __construct (string $name, string $gender, int $age){
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function getName(): string{
        return $this->name;
    }

    public function isAdult(): bool{
        return $this->age > self::MAJOR_AGE;
    }
    public function isMale(): bool{
        return $this->gender === "Male";
    }
    public function isFemale(): bool{
        return $this->gender === "Female";
    }

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

}
