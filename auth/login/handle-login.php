<?php
// db config
include_once "../../database.php";

$email = $_POST['email'];
$password = $_POST['password'];

//echo $email . $password;
// handle user login logic

// queries 
// check user
$sql_stmt_check_user_exist = "SELECT * FROM  `users` WHERE email = ?";
$check_user_exist = mysqli_prepare($conn, $sql_stmt_check_user_exist);
mysqli_stmt_bind_param($check_user_exist, 's', $email);

// get user 
$sql_stmt_get_user = "SELECT * FROM `users` WHERE email = ?";
$get_user = mysqli_prepare($conn, $sql_stmt_get_user);
mysqli_stmt_bind_param($get_user, 's', $email);

// case 1 : user doesnot exist
if (!mysqli_stmt_execute($check_user_exist)) {
    echo 'user doesnot exist, please <a href="../register.php">register</a>';
} else {
    mysqli_stmt_execute($get_user);
    $user = mysqli_stmt_get_result($get_user);
    // $user = mysqli_query($conn,$get_user);
    echo $user['email'] . $user['password'];
}

// case 2 : user exist 
    // case 2.1 : password match : allow user 

    // case 2.2 : password missmatch : redirect with error message
