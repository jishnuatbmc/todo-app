<?php
include("database.php");
$id = $_POST["id"];
$task = $_POST["task"];

// old-query-method
// mysqli_query($conn,"UPDATE `todo` SET `task` = '$task' WHERE id= $id;");
// header("location:index.php");

// check empty string
if (strlen($task) == 0) {
    $delete_todo = mysqli_prepare($conn, "DELETE FROM todo WHERE id = ?");
    mysqli_stmt_bind_param($delete_todo, 'i', $id);
    mysqli_stmt_execute($delete_todo);
} else {
    // update-via-prepared-statement
    $update_todo = mysqli_prepare($conn, "UPDATE todo SET task = ? WHERE id = ?;");
    mysqli_stmt_bind_param($update_todo, 'si', $task, $id);
    mysqli_stmt_execute($update_todo);
}
header("location:index.php");
