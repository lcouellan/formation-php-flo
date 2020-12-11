<?php
abstract class Dinosaur{

    private string $name;
    private string $gender;
    private int $age;
    private const MAJOR_AGE = 21;
    private const GENDER_FEMALE = 'Female';
    private const GENDER_MALE = 'Male';

    public function __construct (string $name, string $gender, int $age){
        if (!in_array($gender, [self::GENDER_FEMALE, self::GENDER_MALE])) {
            throw new Exception("Wrong gender");
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

    public abstract function roar(): string;
    public abstract function getRace(): string;

}
