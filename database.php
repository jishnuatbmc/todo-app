<?php
    // db config
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = "todo";

    // create db connection
    $conn = new mysqli($db_host,$db_user,$db_password,$db_name);

    // check for connection error 
    if($conn->connect_error){
        die("connection failed :".$conn->connect_error);
    }
?>