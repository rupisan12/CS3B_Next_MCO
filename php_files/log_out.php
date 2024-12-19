<?php
session_start();

if (isset($_SESSION["unique_id"])) {
    include_once "config.php";
    $logout_id = $_GET['user_id'];
    if (isset($logout_id)) {
        session_unset();    
        session_destroy();
        header('location: /sign_in_chat.php');
    }else {
        header("location: /sign_in_chat.php");
    }
}


?>