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
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">List</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/create">Create<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form method="GET" action="http://localhost/" class="form-inline my-2 my-lg-0 pull-right">
          <input type="search" name="q" value="<?php echo $q; ?>" placeholder="Search" class="form-control mr-sm-2" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container">
      <div class="row">
            <form action="" method="post">

            <input type="text" name="name" id="name" placeholder="name" class="form-control mr-sm-2" required>
            <input type="number" name="age" id="age" placeholder="age" class="form-control mr-sm-2" required>
            <select name="gender" id="gender">
                <option value="Male" default>Male</option>
                <option value="Female">Female</option>
            </select>
            <select name="race" id="race">
                <option value="Pterodactyl" selected>Pterodactyl</option>
                <option value="Triceratops">Triceratops</option>
                <option value="Tyrannosaurus">Tyrannosaurus</option>
            </select>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
            </form>
      </div>
    </div>
  </body>
</html>
