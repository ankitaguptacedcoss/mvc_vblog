<?php
include "../config/config.php"; //including connection file
$id= $_POST['id']; //getting user id
$user = User::find_by_user_id($id); //finding data with user id
//changing status accordingly and updating in table users
if($user->status=="Approved"){ 
    $user->status="Cancel";
}
else{
    $user->status="Approved";
}
$user->save();
echo  $user->status;
