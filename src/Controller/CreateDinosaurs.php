<?php

namespace KNPLabs\Controller;

use KNPLabs\Real\Dinosaur\Pterodactyl;
use KNPLabs\Real\Dinosaur\Triceratops;
use KNPLabs\Real\Dinosaur\Tyrannosaurus;
use KNPLabs\Real\Persister\DinosaursPersister;
use KNPLabs\Routing\Controller;

class CreateDinosaurs implements Controller
{
    private DinosaursPersister $dinosaursPersister;

    public function __construct(DinosaursPersister $dinosaursPersister)
    {
        $this->dinosaursPersister = $dinosaursPersister;
    }

    public function handleRequest(): void
    {
        if (!empty($_POST)) {
            if (isset($_POST['name']) && isset($_POST['race']) && isset($_POST['gender']) && isset($_POST['age'])) {
                $name = $_POST['name'];
                $race = $_POST['race'];
                $gender = $_POST['gender'];
                $age = $_POST['age'];
            } else {
                throw new \Exception("Error in submitted datas", 1);
            }
            switch ($race) {
                case 'Tyrannosaurus':
                    $newDinosaur = new Tyrannosaurus($name, $gender, $age);
                    break;
                case 'Triceratops':
                    $newDinosaur = new Triceratops($name, $gender, $age);
                    break;
                case 'Pterodactyl':
                    $newDinosaur = new Pterodactyl($name, $gender, $age);
                    break;

                default:
                    throw new \Exception("Error in submited race", 1);
            }
            $this->dinosaursPersister->save($newDinosaur);
            
            header('Location: http://localhost');
 
            return;
        }

        ViewRenderer::render('createDinosaurs.php');
    }
}
