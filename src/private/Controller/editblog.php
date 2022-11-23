<?php
session_start();
include "../config/config.php";
$_SESSION['bid']= $_POST['edit']; //getting blog id
$blog=Blog::find_by_blog_id($_SESSION['bid']); //finding data with blog id
//storing in session variables
$_SESSION['blog_name']=$blog->blog_name; 
$_SESSION['blog_category']=$blog->blog_category;
$_SESSION['blog_content']=$blog->blog_content;
$_SESSION['blog_uid']=$blog->user_id;
$_SESSION['blog_img']=$blog->blog_image;
header("location: ../View/updateblog.php");
