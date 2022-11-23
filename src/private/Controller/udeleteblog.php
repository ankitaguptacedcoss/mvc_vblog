<?php
session_start();
include "../config/config.php";
$user_id=$_SESSION['user_id']; //getting user id
$blog_id=$_POST['id']; //getting blog id
$blog = Blog::find_by_blog_id($blog_id); //find blog by blog id
$blog->delete(); //delete the record 
