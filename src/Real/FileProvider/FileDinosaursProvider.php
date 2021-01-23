<?php

namespace KNPLabs\Real\FileProvider;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyrannosaurus;
use KNPLabs\Real\Provider\DinosaursProvider;

class FileDinosaursProvider implements DinosaursProvider
{
    /**
     * @var array<Dinosaur>
     */
    private array $dinosaurs;

    public function __construct(string $filePath)
    {
        $jsonDinosaurs = file_get_contents($filePath);
        $jsonDecodedDinosaurs = json_decode($jsonDinosaurs, true);
        foreach ($jsonDecodedDinosaurs as $dino) {
            switch ($dino['race']) {
                case 'Tyrannosaurus':
                    $this->dinosaurs[] = new Tyrannosaurus($dino['name'], $dino['gender'], $dino['age']);
                    break;
                case 'Triceratops':
                    $this->dinosaurs[] = new Triceratops($dino['name'], $dino['gender'], $dino['age']);
                    break;
                case 'Pterodactyl':
                    $this->dinosaurs[] = new Pterodactyl($dino['name'], $dino['gender'], $dino['age']);
                    break;

                default:
                    throw new \Exception("Error Processing Dinos json file", 1);
            }
        }
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
            return 1 === preg_match('/'. $name . '/i', $dinosaur->getName());
        });
    }
}
