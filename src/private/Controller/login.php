<?php
session_start();
include "../config/config.php";
$email=$_POST['email']; //getting email 
$password=$_POST['password']; //getting password
//finding data in table users
$user=User::find(array('email' => $email, 'password' => $password,'status'=>'approved'));
//credirect to admin page
if($user->email=="admin@blog.com" && $user->password=="123"){
    header("location: ../View/admin.php");
}
else{
    //redirect user page if matched
    if($user){
        $_SESSION['user_id']=$user->user_id;
        header("location: ../View/user.php");
    }else{
        $msg="invalid credentials or your status is pending";
        header("location: ../View/login.php?msg=$msg");
    }
}
