<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Dinosaurs</h1>
      <div class="row">
        <?php foreach ($dinosaurs as $dinosaur) : ?>
        <div class="card" style="width: 18rem; margin: 0.6rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $dinosaur->getName(); ?></h5>
            <h6 class="card-subtitle text-muted mb-2"><?php echo $dinosaur->isAdult() ? 'Adult' : 'Baby' ?> <?php echo $dinosaur->getRace(); ?></h6>
            <p class="card-text"><?php echo $dinosaur->roar(); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>
