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
          <li class="nav-item active pull-right">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item active pull-right">
            <a class="nav-link" href="/logout">Logout</a>
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
        <span><?php if (isset($authenticatedUser)){
            echo  $authenticatedUser->getFirstName();
        }
            ?></span>
        <span></span>
      </div>
      <div class="row">
            <form action="" method="post">
                <input type="email" name="email" id="email" placeholder="email" class="form-control mr-sm-2" required>
                <input type="password" name="password" id="password" placeholder="password" class="form-control mr-sm-2" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
            </form>
      </div>
    </div>
  </body>
</html>
