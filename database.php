<?php
// db config
$db_host = "localhost";
$db_port = "3306";
$db_user = "root";
$db_password = "";
$db_name = "todo";

// create db connection
$conn = mysqli_connect($db_host . ":" . $db_port, $db_user, $db_password, $db_name);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    exit();
}
