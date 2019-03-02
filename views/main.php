<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shareboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand mb-0 h1" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </li>
        <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container mt-5">
    <?php require($view); ?>
  </div>

      
</body>
</html>