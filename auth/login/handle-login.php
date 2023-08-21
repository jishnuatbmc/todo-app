<?php
// initialize session
//session_start();

// db config
include_once "../../database.php";

// get current password
$email = $_POST['email'];
$password = $_POST['password'];

// handle user login logic

// queries 
// get user 
$sql_stmt_get_user = "SELECT id,email,password FROM `users` WHERE email = ?";
$get_user = mysqli_prepare($conn, $sql_stmt_get_user);
mysqli_stmt_bind_param($get_user, 's', $email);

// attempt to execute the query 
if (mysqli_stmt_execute($get_user)) {
    /* store the result */
    mysqli_stmt_store_result($get_user);

    if (mysqli_stmt_num_rows($get_user) == 1) {
        // handle user login after checking password
        mysqli_stmt_bind_result($get_user, $id, $email, $hashed_password);

        // do fetch 
        if (mysqli_stmt_fetch($get_user)) {
            if (password_verify($password, $hashed_password)) {
                // verified password 
                // then create/start a session
                session_start();

                $_SESSION["loggedin"] = true;
                $_SESSION["user_id"] = $id;
                $_SESSION["email"] = $email;

                // redirect
                header("location:/index.php");
            } else {
                echo "password miss match, try again!";
            }
        }
    } else {
        echo 'user doesnot exist. please proceed to <a href="../register.php">register</a>';
    }
}