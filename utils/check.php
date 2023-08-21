<?php
if (!isset($_SESSION['user_id'])){
    header('location:/auth/login.php');
}
