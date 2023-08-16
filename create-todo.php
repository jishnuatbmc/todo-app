<?php
include('database.php');
echo $task = $_POST['task'];
mysqli_query($conn,"INSERT INTO `todo`(`task`) VALUES ('$task');");
header: