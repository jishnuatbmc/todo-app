<?php

include "database.php";
$id = $_GET['ID'];

// old-method
// mysqli_query($conn, "DELETE FROM `todo` WHERE id = $id;");

// delete-via-prepared-statement
$delete_todo = mysqli_prepare($conn, "DELETE FROM todo WHERE id = ?;");
mysqli_stmt_bind_param($delete_todo, 'i', $id);
mysqli_stmt_execute($delete_todo);
header("location:index.php");
