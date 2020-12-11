<?php

require_once('../src/Dinosaur.php');
require_once('../src/Tyrannosaurus.php');
require_once('../src/Triceratops.php');
require_once('../src/Pterodactyl.php');
require_once('../src/Spinosaurus.php');


$denver = new Triceratops('Denver', 'Male', 8);
$rex = new Spinosaurus('Rex', 'Male', 23);
$paula = new Tyrannosaurus('Paula', 'Female', 46);
$bob = new Pterodactyl('bob', 'Male', 6);

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
