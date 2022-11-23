<?php
session_start();
include "../config/config.php"; //including connection file
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

    <div id="intro" class="p-5  bg-light">
      <a href="../View/user.php" class=" h4 mb-3">Upload Blog</a>
      <a href="../View/usersblog.php" class=" h4 mb-3 mx-2">See Your Blogs</a>
      <a href="../Controller/logout.php" class=" h4 mb-3">LogOut</a>

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
              <a class="nav-link" aria-current="page" href="../View/usersblog.php">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../View/categoryblog.php?category=Travel">Travel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../View/categoryblog.php?category=Food">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../View/categoryblog.php?category=News">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../View/categoryblog.php?category=Sports">Sports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../View/categoryblog.php?category=Business">Business</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Main layout-->
  </header>
  <?php
  //showing category wise blog to users when logged in
  $categoryBlog = Blog::find('all', array('blog_category' => $_REQUEST['category'], 'user_id' => $_SESSION['user_id']));
  echo '<div class="row row1">';

  foreach ($categoryBlog as $v) {
    echo '<div class="card  my-4 col-3 ms-5 ">';
    echo '<div class="card-body bg-secondary bg-opacity-25" text-light style="width:11 rem;">';
    echo "<div class='row'>";
    echo "<div class='col-md-6'>";
    echo " <img src='../Controller/uploads/" . $v->blog_image . "' class='card-img-top ' width='380px' height='300px;'/> ";
    echo "</div>";
    echo "<div div class='col-md-6'>";
    echo "<h4 class='card-text text-capitalize'> " . $v->blog_category . "</h4>";
    echo "<p class='card-text fst-italic fs-6'> Blog Name :" . $v->blog_name . "</p>";
    echo "<p class='card-text fst-italic fs-6'> Posted on :" . $v->post_date . "</p>";
    echo "<p class='card-text fst-italic fs-6'> " . $v->blog_content . "</p>";
    echo "<a class='card-text  fs-6' href='../View/detailedblog.php?blogid=$v->blog_id'> Read More</a><br>";
    echo "<button class='btn btn-primary deleteblog mt-5' value='$v->blog_id'>Delete</button>";
    echo "<form action='../Controller/editblog.php' method='post'><button class='btn btn-primary editblog  mt-1' value='$v->blog_id' name='edit'>Edit Blog</button></form>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }

  echo '</div>';

  ?>
</body>

</html>