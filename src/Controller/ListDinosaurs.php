<?php

namespace KNPLabs\Controller;

use Faker\Factory;
use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Spinosaurus;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyrannosaurus;
use KNPLabs\Routing\Controller;

class ListDinosaurs implements Controller{
    public function handleRequest():void
    {
        $faker  = Factory::create();
        $faker->seed(1234);
        $dinosaurs=[
        new Triceratops($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1,Dinosaur::MAX_AGE)),
        new Spinosaurus($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1,Dinosaur::MAX_AGE)),
        new Tyrannosaurus($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1,Dinosaur::MAX_AGE)),
        new Pterodactyl($faker->firstName(), $faker->randomElement([Dinosaur::GENDER_FEMALE,Dinosaur::GENDER_MALE]), $faker->numberBetween(1,Dinosaur::MAX_AGE))
        ];
        require __DIR__ . '/../../views/listDinosaurs.php';
    }
}
