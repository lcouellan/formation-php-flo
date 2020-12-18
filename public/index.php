<?php

use KNPLabs\Real\Dinosaur;

include('../src/autoloader.php');


$denver = new Dinosaur\Triceratops('Denver', 'Male', 8);
$rex = new Dinosaur\Spinosaurus('Rex', 'Male', 23);
$paula = new Dinosaur\Tyrannosaurus('Paula', 'Female', 46);
$bob = new Dinosaur\Pterodactyl('bob', 'Male', 6);

?>

<html>
  <body>
    <h1>PHP Training</h1>
    <p><?php echo $denver->getName() . ': '. $denver->roar(); ?></p>
    <p><?php echo $rex->getName() . ': '. $rex->roar(); ?></p>
    <p><?php echo $paula->getName() . ': '. $paula->roar(); ?></p>
    <p><?php echo $bob->getName() . ': '. $bob->roar(); ?></p>
  </body>
</html>
