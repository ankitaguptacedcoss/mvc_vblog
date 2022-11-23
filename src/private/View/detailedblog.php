<?php
session_start();
include "../config/config.php"; //including connection file
$blogid = $_REQUEST['blogid']; //getting blog id
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php
    //finding data using blogid for single blog display
    $Blog = Blog::find_by_blog_id($blogid);
    echo '<div class="row row1 me-5">';
    echo '<div class="card  my-4 col ms-5 ">';
    echo '<div class="card-body bg-light " text-light style="width:11 rem;">';
    echo "<a class='card-text  fs-6' href='../View/usersblog.php?blogid=$v->blog_id'><button class='btn btn-primary'>Back</button></a><br><br>";
    echo "<div class='row'>";
    echo "<div class='col-md-6'>";
    echo " <img src='../Controller/uploads/" . $Blog->blog_image . "' class='card-img-top ' width='380px' height='300px;'/> ";
    echo "</div>";
    echo "<div div class='col-md-6'>";
    echo "<h4 class='card-text text-capitalize'> " . $Blog->blog_category . "</h4>";
    echo "<p class='card-text fst-italic fs-6'> Blog Name :" . $Blog->blog_name . "</p>";
    echo "<p class='card-text fst-italic fs-6'> Blog Name :" . $Blog->post_date . "</p>";
    echo "<p class='card-text fst-italic fs-6'> " . $Blog->blog_content . "</p>";
    echo "<button class='btn btn-primary deleteblog mt-5' value='$Blog->blog_id'>Delete</button>";
    echo "<form action='../Controller/editblog.php' method='post'><button class='btn btn-primary editblog  mt-1' value='$Blog->blog_id' name='edit'>Edit Blog</button></form>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo '</div>';
    ?>
</body>
<!-- script file -->
<script src="../../public/script/script.js"></script>

</html>