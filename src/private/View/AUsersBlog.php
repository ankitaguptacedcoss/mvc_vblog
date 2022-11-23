<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    <?php
    include "../../public/css/style.css"; //including css file
    ?>
</style>

<body>
    <header>
        <!-- start of navbar -->
        <div id="intro" class="p-3 mb-5  bg-light">
            <h4 class="text-center">Admin Panel</h4>
            <a href="../View/showblogs.php" class=" h4 ">Home</a>
            <a href="../View/admin.php" class=" h4 mx-4">Users</a>
            <a href="../Controller/logout.php" class=" h4 ">LogOut</a>
        </div>
    </header>
    <div class="row mx-3">
        <?php
        include "../config/config.php"; //including connection file
        $blog = Blog::find('all', array('order' => 'blog_id desc'));
        ?>
        <div class="col">
            <h4 class="text-center mb-4"> Recent Blogs</h4>
            <?php
            //displaying table for blogs to admin
            echo "<table>";
            echo "<tr><th>Blog ID</th><th>User ID</th><th>Content</th><th>category</th><th></th><th>Option</th><tr>";
            foreach ($blog as $v) {
                echo "<tr><td>" . $v->blog_id . "</td>";
                echo "<td>" . $v->user_id . "</td>";
                echo "<td>" . $v->blog_content . "</td>";
                echo "<td>" . $v->blog_category . "</td>";
                echo " <td><img src='../Controller/uploads/" . $v->blog_image . "'  width='80px' height='80px;'/> </td>";
                echo "<td><button class=' btn btn-outline-dark Adeleteblog' value='$v->blog_id'>Delete Blog</button></td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </div>
    </div>
</body>
<!-- script file -->
<script src="../../public/script/script.js"></script>

</html>