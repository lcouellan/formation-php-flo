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
        if (isset($_GET['q'])) {
            $q = $_GET['q'];

            $dinosaurs = $this->dinosaursProvider->searchByName($q);
        } else {
            $dinosaurs = $this->dinosaursProvider->all();
        }

        ViewRenderer::render('listDinosaurs.php', [
            'dinosaurs' => $dinosaurs,
            'q' => $q
        ]);
    }
}
