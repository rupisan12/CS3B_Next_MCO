<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include 'config.php';
    $sender_id = $_POST["sender_id"];
    $receiver_id = $_POST["receiver_id"];
    $list_output = "";
    
    $sql_msg ="SELECT * FROM chat
    JOIN users ON users.unique_id = chat.receiver_id
    WHERE (sender_id = {$sender_id} AND receiver_id = {$receiver_id}) OR (sender_id = {$receiver_id} AND receiver_id = {$sender_id}) 
    ORDER BY date";
    $sql_query = mysqli_query($conn, $sql_msg);
    

    if(mysqli_num_rows($sql_query) > 0){
        while($row_list = mysqli_fetch_assoc($sql_query) ) {
            if($row_list['sender_id'] == $sender_id) { //Sender
                $list_output .= '
                <div class="chat-box-active sen">
                <div class="details-chat">
                  <div class="msg-chat-rec">
                  <p>'.$row_list['message'].'</p>
                  <span class="time-rec">'.$row_list['date'].'</span>
                  </div>        
                
                </div> 
              </div>';
            }else{   //Receiver
                $list_output .= '   
                <div class="chat-box-active rec">
                <img src="php_files/img/'.$row_list['img'].' " alt="" />
                <div class="details-chat">
                <div class="msg-chat-rec">
                  <p>'.$row_list['message'].'</p>
                  <span class="time-rec">'.$row_list['date'].'</span>
                </div>
                </div>
              </div>';
    
            }
     
        }
echo $list_output;
}
}else {
    header("Location: /sign_in_chat.php");
}
?> 