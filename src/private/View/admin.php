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
        <div id="intro" class="p-3 mb-5  bg-light">
            <h4 class="text-center">Admin Panel</h4>
            <a href="../View/showblogs.php" class=" h4  ">Home</a>
            <a href="../View/AUsersBlog.php" class=" h4 mx-4 ">Users BLog</a>
            <a href="../Controller/logout.php" class=" h4 ">LogOut</a>
        </div>
    </header>
    <div class="row mx-3">
        <h4 class="text-center mb-4">Users Details</h4>
        <div class="col">
            <?php
            include "../config/config.php"; //including connection file
            //finding  recent users registered 
            $user = User::find_by_sql("SELECT * FROM users WHERE user_id NOT IN (3) order by user_id desc");
            //for displaying users to admin
            echo "<table>";
            echo "<tr><th>ID</th><th>Email</th><th>Name</th><th>status</th><th>Option</th><tr>";
            foreach ($user as $v) {
                echo "<tr><td>" . $v->user_id . "</td>";
                echo "<td>" . $v->email . "</td>";
                echo "<td>" . $v->name_user . "</td>";
                echo "<td>" . $v->status . "</td>";
                echo "<td><button class=' btn btn-outline-dark approve' value='$v->user_id'>Update Status</button></td>";
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