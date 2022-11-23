<?php
session_start();
include "../config/config.php";//including connection file
$blogname= $_POST['blogname']; //getting blog name
$content= $_POST['content']; //getting blog content
$category= $_POST['category']; //getting blog category
$target_dir = "./uploads/";
//for file /image upload
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $msg="File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $msg="File is not an image.";
    $uploadOk = 0;
  }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $img= htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
  } else {
    $msg= "Sorry, there was an error uploading your file.";
  }
}
//inserting values in table blogs 
$Blog = Blog::create(array('blog_name' => $blogname, 'blog_image' => $img,'blog_content'=>$content,'blog_category'=>$category,'user_id'=>$_SESSION['user_id'],'post_date'=>date("Y-m-d")));
if($Blog){
    header("location: ../View/usersblog.php");

}
