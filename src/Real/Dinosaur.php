<?php

namespace KNPLabs\Real;

abstract class Dinosaur{

    private string $name;
    private string $gender;
    private int $age;
    private const MAJOR_AGE = 21;
    public const GENDER_FEMALE = 'Female';
    public const GENDER_MALE = 'Male';
    public const MAX_AGE = 60;

    public function __construct (string $name, string $gender, int $age){
        if (!in_array($gender, [self::GENDER_FEMALE, self::GENDER_MALE])) {
            throw new \Exception("Wrong gender");
        }
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
        return $this->gender === self::GENDER_MALE;
    }
    public function isFemale(): bool{
        return $this->gender === self::GENDER_FEMALE;
    }
    public function toArray(): array{
        $rawDino = [
            "name"=>$this->name,
            "gender"=>$this->gender,
            "age"=>$this->age,
            "race"=>$this->getRace(),

        ];
        return $rawDino;
    }
    public abstract function roar(): string;
    public abstract function getRace(): string;

}
