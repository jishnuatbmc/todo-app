<?php
session_start();
include("database.php");
$id = $_POST["id"];
$task = $_POST["task"];
$user_id = $_SESSION['user_id'];

// check empty string
if (strlen($task) == 0) {
    $delete_todo = mysqli_prepare($conn, "DELETE FROM todo WHERE id = ? and user_id = ?;");
    mysqli_stmt_bind_param($delete_todo, 'ii', $id, $user_id);
    mysqli_stmt_execute($delete_todo);
} else {
    // update-via-prepared-statement
    $update_todo = mysqli_prepare($conn, "UPDATE todo SET task = ? WHERE id = ? and user_id = ?;");
    mysqli_stmt_bind_param($update_todo, 'sii', $task, $id, $user_id);
    mysqli_stmt_execute($update_todo);
}
header("location:index.php");
