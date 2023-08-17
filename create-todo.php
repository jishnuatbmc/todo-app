<?php
include('database.php');

// old-method 
//$task = $_POST['task'];
//mysqli_query($conn,"INSERT INTO `todo`(`task`) VALUES ('$task');");
//header("location:index.php");

// create via prepared statements
$create_todo = mysqli_prepare($conn, "INSERT INTO todo(task) VALUES (?);"); // statement preparation
mysqli_stmt_bind_param($create_todo, 's', $task); // binding
$task = $_POST['task'];
mysqli_stmt_execute($create_todo);
header("location:index.php");
