<?php

require_once('../src/Dinosaur.php');

$denver = new Dinosaur('Denver', 'Male', 8);
$rex = new Dinosaur('Rex', 'Male', 23);
$paula = new Dinosaur('Paula', 'Female', 46);

?>

<html>
  <body>
    <h1>PHP Training</h1>
    <p><?php echo $denver->getName() . ': '. $denver->roar(); ?></p>
    <p><?php echo $rex->getName() . ': '. $rex->roar(); ?></p>
    <p><?php echo $paula->getName() . ': '. $paula->roar(); ?></p>
    </p>
  </body>
</html>
