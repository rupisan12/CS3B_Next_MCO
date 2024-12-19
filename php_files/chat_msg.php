<?php 
session_start();
if (isset($_SESSION['unique_id'])) {
    include ('config.php');
    $sender_id = $_POST["sender_id"];
    $receiver_id = $_POST["receiver_id"];
    $chat_msg = $_POST["input_send"];
    
    if (!empty($chat_msg)) {
            $sqls = mysqli_query($conn,"INSERT INTO chat(sender_id, receiver_id, message) VALUES ({$sender_id}, {$receiver_id}, '{$chat_msg}')")  or die();
    }
} else {
    header("sign_in_chat.php");
}

?>