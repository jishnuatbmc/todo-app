<?php
if (!isset($_SESSION["user_id"]) or !$_SESSION['loggedin']) {
    header('location:/auth/login.php');
}
