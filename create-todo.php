<?php
session_start();
include('database.php');

// create via prepared statements
$create_todo = mysqli_prepare($conn, "INSERT INTO todo(task,user_id) VALUES (?,?);"); // statement preparation
mysqli_stmt_bind_param($create_todo, 'si', $task, $user_id); // binding

$task = $_POST['task'];
$user_id = $_SESSION['user_id'];

if (strlen($task) != 0) {
    mysqli_stmt_execute($create_todo);
}
header("location:index.php");
