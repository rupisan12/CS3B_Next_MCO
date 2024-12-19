<?php
session_start();
include_once("config.php");

$orig_id = $_SESSION['unique_id']; //Original Id of your login

$sql_list = mysqli_query($conn,"SELECT * FROM users WHERE unique_id !='{$orig_id}'");
$list_output = ""; //List of all the users that are available in the database except the user x

?>