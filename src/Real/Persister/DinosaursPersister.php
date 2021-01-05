<?php

namespace KNPLabs\Real\Persister;

use KNPLabs\Real\Dinosaur;

interface DinosaursPersister
{
    /**
     * @return void
     */
    public function save(Dinosaur $dinosaur): void;
}
