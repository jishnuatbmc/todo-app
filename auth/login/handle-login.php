<?php
// db config
include_once "../../database.php";

$email = $_POST['email'];
$password = $_POST['password'];

//echo $email . $password;
// handle user login logic

// queries 

// get user 
$sql_stmt_get_user = "SELECT * FROM `users` WHERE email = ?";
$get_user = mysqli_prepare($conn, $sql_stmt_get_user);
mysqli_stmt_bind_param($get_user, 's', $email);

$userData = mysqli_stmt_get_result($get_user);
$user = mysqli_fetch_array($userData);
// case 1 : user doesnot exist
if (!$user) {
    echo 'user doesnot exist, please <a href="../register.php">register</a>';
} else {

// case 2 : user exist 
    // case 2.1 : password match : allow user 

    // case 2.2 : password missmatch : redirect with error message

    echo $user['email'] . $user['password'];
}