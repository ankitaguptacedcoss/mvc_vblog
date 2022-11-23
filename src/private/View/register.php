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
    <section style="background-color: black;">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 ">Sign up</p>
                                    <!-- start of  registration form  -->
                                    <form class="mx-1 mx-md-4 " action="../Controller/signup.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- input for name -->
                                                <input type="text" id="form3Example1c" class="form-control" name="name" />
                                                <label class="form-label  fst-italic" for="form3Example1c">Your Full Name</label>
                                            </div>
                                        </div>
                                        <!-- input for email -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" name="email" />
                                                <label class="form-label  fst-italic" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>
                                        <!-- input for password -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" name="password" />
                                                <label class="form-label  fst-italic" for="form3Example4c">Password</label>
                                            </div>
                                        </div>
                                        <!-- input for confirm password -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" name="cpassword" />
                                                <label class="form-label  fst-italic" for="form3Example4cd">Repeat your password</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-outline-danger btn-lg">Register</button>
                                        </div>
                                        <!-- error msg -->
                                        <p id="msg"><?php echo $msg;
                                                    ?></p>
                                    </form>
                                </div>
                                <!-- image -->
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="../../public/images/Blog.png" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>