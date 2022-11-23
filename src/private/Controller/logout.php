<?php
//unset session and redirect to login page when user clicks on log out button
session_start();
session_unset();
header("location: ../View/login.php");
