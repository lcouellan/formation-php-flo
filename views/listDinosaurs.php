<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Dinosaurs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method="GET" action="http://localhost/" class="form-inline my-2 my-lg-0 pull-right">
          <input type="search" name="q" value="<?php echo $q; ?>" placeholder="Search" class="form-control mr-sm-2" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container">
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
        <?php echo empty($dinosaurs) ? 'No dinos' : ''?>
      </div>
    </div>
  </body>
</html>
