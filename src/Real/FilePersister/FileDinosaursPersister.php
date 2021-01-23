<?php

namespace KNPLabs\Real\FilePersister;

use KNPLabs\Real\Dinosaur;
use KNPLabs\Real\Persister\DinosaursPersister;
use KNPLabs\Real\Provider\DinosaursProvider;

class FileDinosaursPersister implements DinosaursPersister
{
    private string $filePath;
    private DinosaursProvider $dinosaurProvider;

    public function __construct(string $filePath, DinosaursProvider $dinosaurProvider)
    {
        $this->filePath = $filePath;
        $this->dinosaurProvider = $dinosaurProvider;
    }

    public function save(Dinosaur $dinosaur): void
    {
        $allDinos = $this->dinosaurProvider->all();
        $allDinos[] = $dinosaur;
        $rawDinosaurs = [];

        foreach ($allDinos as $dino) {
            $rawDinosaurs[] = $dino->toArray();
        }

        $jsonDinos = json_encode($rawDinosaurs);
        file_put_contents($this->filePath, $jsonDinos);
    }
}
