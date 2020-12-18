<?php

namespace KNPLabs\Controller;

use KNPLabs\Real\Provider\DinosaursProvider;
use KNPLabs\Routing\Controller;

class ListDinosaurs implements Controller
{
    private DinosaursProvider $dinosaursProvider;

    public function __construct(DinosaursProvider $dinosaursProvider)
    {
        $this->dinosaursProvider = $dinosaursProvider;
    }

    public function handleRequest(): void
    {
        $dinosaurs = $this->dinosaursProvider->all();

        ViewRenderer::render('listDinosaurs.php', [
            'dinosaurs' => $dinosaurs
        ]);
    }
}
