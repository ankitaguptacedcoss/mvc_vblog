<?php
session_start();
include "../config/config.php";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <header>
    </div>
    <!--Main Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-5">
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
  </header>
  <?php
  //showing category wise blog to user 
  $categoryBlog = Blog::find('all', array('blog_category' => $_REQUEST['category']));
  echo '<div class="row row1">';
  //displaying blog
  foreach ($categoryBlog as $v) {
    echo '<div class="card  my-4 col-3 ms-5 ">';
    echo '<div class="card-body bg-secondary bg-opacity-25" text-light style="width:11 rem;">';
    echo "<div class='row'>";
    echo "<div >";
    echo " <img src='../Controller/uploads/" . $v->blog_image . "' class='card-img-top ' width='380px' height='300px;'/> ";
    echo "</div>";
    echo "<div>";
    echo "<h4 class='card-text text-capitalize mt-3'> " . $v->blog_category . "</h4>";
    echo "<p class='card-text fst-italic fs-6'> Blog Name :" . $v->blog_name . "</p>";
    echo "<p class='card-text fst-italic fs-6'> " . $v->blog_content . "</p>";
    echo "<a class='card-text  fs-6' href='../View/homedetaliedblog.php?blogid=$v->blog_id'> Read More</a><br>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
  echo '</div>';

  ?>
</body>

</html>