<?php
include("database.php");
$id = $_POST["id"];
$task = $_POST["task"];

mysqli_query($conn,"UPDATE `todo` SET `task` = '$task' WHERE id= $id;");
header("location:index.php");

