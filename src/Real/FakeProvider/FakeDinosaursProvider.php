<?php // src/KNPLabs/Real/FakeProvider/FakeDinosaursProvider.php

namespace KNPLabs\Real\FakeProvider;

use Faker\Factory;
use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Provider\DinosaursProvider;
use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Spinosaurus;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyrannosaurus;

class FakeDinosaursProvider implements DinosaursProvider
{
    /**
     * @var array<Dinosaur>
     */
    private array $dinosaurs;

    public function __construct()
    {
        $faker  = Factory::create();
        $faker->seed(1234);
        $this->dinosaurs=[
        new Triceratops($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1, Dinosaur::MAX_AGE)),
        new Spinosaurus($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1, Dinosaur::MAX_AGE)),
        new Tyrannosaurus($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1, Dinosaur::MAX_AGE)),
        new Pterodactyl($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1, Dinosaur::MAX_AGE))
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function all(): array
    {
        return $this->dinosaurs;
    }

    /**
     * {@inheritDoc}
     */
    public function searchByName(string $name): array
    {
        return array_filter($this->dinosaurs, function ($dinosaur) use ($name) {
            return 1 === preg_match('/'. $name . '/', $dinosaur->getName());
        });
    }
}
