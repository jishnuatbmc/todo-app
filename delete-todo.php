<?php
session_start();
echo session_id();
include "database.php";
$id = $_GET['ID'];
$user_id = $_SESSION['user_id'];
// delete-via-prepared-statement

$sql_stmnt_delete_todo = "DELETE FROM todo WHERE id = ? AND user_id = ?;";
$delete_todo = mysqli_prepare($conn, $sql_stmnt_delete_todo);
mysqli_stmt_bind_param($delete_todo, 'ii', $id, $user_id);
mysqli_stmt_execute($delete_todo);
header("location:./index.php");
