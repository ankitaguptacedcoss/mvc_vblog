<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- start of navbar -->
  <header>
    <div id="intro" class="p-5  bg-light">
      <a href="../View/showblogs.php" class=" h4 mb-3">Home</a>
      <a href="../View/usersblog.php" class=" h4 mb-3 mx-2">See Your Blogs</a>
      <a href="../Controller/logout.php" class=" h4 mb-3">LogOut</a>

    </div>
    <!-- Jumbotron -->
  </header>
  <main>
    <h1 class=" h3 text-center bg-info ">Create Your Blog</h1>
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <!--Section: Post data-mdb-->
          <div class="row align-items-center mb-4">
            <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
              <img src="../../public/images/Blog.png" class="rounded-5  me-2" height="350" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- strat of form for creating blog -->
  <form class="mx-5" action="../Controller/blogdetails.php" method="post" enctype="multipart/form-data">
    <!-- Name input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example1">Name of Blog</label>
      <input type="text" name="blogname" class="form-control" required />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example1">Blog Category </label><br>
      <select class="p-2 bg-info" name="category">
        <option>Travel</option>
        <option>Food</option>
        <option>Business</option>
        <option>Sports</option>
        <option>News</option>
      </select>
    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form4Example2">Upload Image</label><br>
      <input type="file" name="fileToUpload" id="fileToUpload" required>

    </div>
    <!-- Message input -->
    <div class="form-outline mb-4">
      <textarea class="form-control" id="form4Example3" rows="4" name="content" required></textarea>
      <label class="form-label" for="form4Example3">Content</label>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">
      Publish
    </button>
  </form>
  </section>
  </div>
  </main>
</body>

</html>