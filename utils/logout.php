<?php

function logout()
{
    session_start();
    $_SESSION["loggedin"] = false;
    unset($_SESSION["user_id"]);
    unset($_SESSION["email"]);
    session_commit();

    header("location:/auth/login.php");
}


logout();
