<?php
include "../config/config.php"; //including connection file
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white " style="margin-left:990px;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" target="_blank" href="../View/showblogs.php">
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
  </header>
  <!--category Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning ">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="../View/showblogs.php">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/categoriesblog.php?category=Travel">Travel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/categoriesblog.php?category=Food">Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/categoriesblog.php?category=News">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/categoriesblog.php?category=Sports">Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/categoriesblog.php?category=Business">Business</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Main layout-->
  <?php
  //finding   recent blogs on home page 
  $blog = Blog::find('all', array('order' => 'blog_id desc'));
  ?>
  <div class="row mx-5">
    <main class="my-5 col-md-7 ">
      <h3 class="fst-italic text-center">Recent Blogs</h3>
      <div class="container">
        <!--Section: Content-->
        <?php
        //displaying   recent blogs on home page 
        echo '<div class="row ">';
        foreach ($blog as $v) {
          echo '<div class="card  my-4 col-6 ">';
          echo '<div class="card-body bg-secondary bg-opacity-25" text-light style="width:25 rem;">';
          echo "<div >";
          echo "<div >";
          echo " <img src='../Controller/uploads/" . $v->blog_image . "' class='card-img-top ' width='300px' height='280px;'/> ";
          echo "</div>";
          echo "<div>";
          echo "<h4 class='card-text text-capitalize mt-3'> " . $v->blog_category . "</h4>";
          echo "<p class='card-text fst-italic fs-6'> Blog Name :" . $v->blog_name . "</p>";
          echo "<p class='card-text fst-italic fs-6'> Posted on :" . $v->post_date . "</p>";
          echo "<p class='card-text fst-italic fs-6'> " . $v->blog_content . "</p>";
          echo "<a class='card-text  fs-6' href='../View/homedetaliedblog.php?blogid=$v->blog_id'> Read More</a><br>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
        }
        echo '</div>';
        ?>
      </div>
    </main>
    <div class="col-md-4 ms-5 ">
      <?php
      $blog = Blog::find('all', array('limit' => 5));
      ?>
      <main class="my-5 col-md-4">
        <h3 class="fst-italic text-center">All Blogs</h3>
        <?php
        echo '<div class="row">';
        foreach ($blog as $v) {
          echo '<div class="card  my-4  ">';
          echo '<div class="card-body " text-light style="width:15 rem;">';
          echo "<div >";
          echo "<div >";
          echo "</div>";
          echo "<div>";
          echo "<h4 class='card-text text-capitalize mt-3'> " . $v->blog_category . "</h4>";
          echo "<p class='card-text fst-italic fs-6'> Blog Name :" . $v->blog_name . "</p>";
          echo "<p class='card-text fst-italic fs-6'> Posted on :" . $v->post_date . "</p>";
          echo "<a class='card-text  fs-6' href='../View/homedetaliedblog.php?blogid=$v->blog_id'> Read More</a><br>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
        }
        echo '</div>';

        ?>
      </main>
    </div>
  </div>

</body>

</html>