<?php

function logout()
{
    session_destroy();
    header("location:/auth/login.php");
}


logout();
