<?php

include "database.php";
$id = $_GET['ID'];

mysqli_query($conn, "DELETE FROM `todo` WHERE id = $id;");
header("location:index.php");