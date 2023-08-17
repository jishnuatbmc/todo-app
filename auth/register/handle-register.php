<?php
require_once "../../database.php";
$email = $_POST['email'];
$password = $_POST['password'];
$hash_password = password_hash($password,PASSWORD_DEFAULT);
// echo $password." and ".$hash_password;

// check for existing user?
$sql_stmnt_check_user = "SELECT * FROM `users` WHERE email = ?;";
$check_exist_user = mysqli_prepare($conn,$sql_stmnt_check_user);
mysqli_stmt_bind_param($check_exist_user,'s',$email);
if (mysqli_stmt_execute($check_exist_user)){
    echo 'user already exist, please continue to <a href="../login.php">login</a>';
}
else {
    $sql_stmnt_create_user = "INSERT INTO `users`(`email`,`password`) VALUES (?,?);";
    $create_user = mysqli_prepare($conn, $sql_stmnt_create_user);
    mysqli_stmt_bind_param($create_user, 'ss', $email, $hash_password);
    mysqli_stmt_execute($create_user);
    header("location:../login.php");
}