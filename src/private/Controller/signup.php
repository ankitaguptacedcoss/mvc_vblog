<?php
include "../config/config.php"; //including connection file
//check if fields are not empty
 if(empty($_POST['name']) || empty($_POST['password'] || empty($_POST['cpassword']) || empty($_POST['email']))){
    $msg="Fields cannot be empty";
    header("location: ../View/register.php?msg=$msg");
 }
 else{
   //checking if confirm password and password are same
    if($_POST['cpassword']==$_POST['password']){
      //insert into users table
        $user = User::create(array('name_user' => $_POST['name'], 'email' => $_POST['email'],'status' =>'requested','password' =>$_POST['password']));
        header("location: ../View/login.php?msg=$msg");
     }else{
      //storing error msg
        $msg="confirm password and password are not same";
        header("location: ../View/register.php?msg=$msg");
     }
 }
