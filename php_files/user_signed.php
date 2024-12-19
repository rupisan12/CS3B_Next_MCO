<?php
  session_start(); 
  //Detects if the user is log in or not.
  include_once "php_files/config.php";
  if (!isset($_SESSION["unique_id"])) { //if the user isn't login or the user just redirect to home page, this will execute.
    header("location: /sign_in_chat.php"); //This will throw the user back to log in page.
  } else { // else the user is log in then load the home page.
    $log_id = $_SESSION['unique_id']; //Records the login
    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $log_id")); //Fetch the user who is login.
  }
  ?>