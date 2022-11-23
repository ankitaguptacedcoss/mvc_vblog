<?php
$msg = $_REQUEST['msg']; //getting error msg
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../../public/css/style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
        <img src="../../public/images/Blog.png" height="76" alt="" loading="lazy" style="margin-top: -3px;" />
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="../View/showblogs.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <div class="row ms-5">
    <!-- start of form -->
    <form class="my-5  col-md-7" action="../Controller/login.php" method="post">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" name="email" required />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="password" required />
        <label class="form-label" for="form2Example2">Password</label>
      </div>
      <!-- error msg -->
      <p id="msg">
        <?php echo $msg; ?>
      </p>
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="../View/register.php">Register</a></p>
      </div>
    </form>
    <div class="col-md-5 " style="margin-top:-80px;">
      <img src="../../public/images/Blog.png" class="img-fluid" alt="Sample image">
    </div>
  </div>
</body>

</html>