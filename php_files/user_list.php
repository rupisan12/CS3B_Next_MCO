<?php
include "data_status.php";
include 'config.php';


if(mysqli_num_rows($sql_list) === 0){
echo "NO USERS AVAILABLE";
}elseif (mysqli_num_rows($sql_list) > 0) {
    while ( $row_list = mysqli_fetch_array($sql_list) ) {
        $sql_user = "SELECT * FROM chat
        WHERE (receiver_id = {$row_list['unique_id']} OR sender_id = {$row_list['unique_id']})
        AND (sender_id={$orig_id} OR receiver_id={$orig_id})
        ORDER BY date DESC
        LIMIT 1
        ";
        $sql_query = mysqli_query($conn, $sql_user);

        $row_listed = mysqli_fetch_assoc($sql_query);
        
        if (mysqli_num_rows($sql_query) > 0) {
            $result_notif = $row_listed['message'];
        
        } else {
            $result_notif = "No message";
        }
        
        $list_output .= ' <a href="home_message.php?user_id='.$row_list['unique_id'].'" class="content-sh">
        <div class="content-user">
          <img src="php_files/img/'.$row_list["img"].'" alt="" />
          <div class="details-user">
            <span>'.$row_list["first_name"] . " " . $row_list["last_name"].'</span>
            <p>'.$result_notif. '</p>
          </div>
        </div>
      </a>';
    }
}
echo "$list_output";

?>