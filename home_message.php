<?php
include "php_files/user_signed.php"; //Detects if the user is login or not.
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link rel="stylesheet" href="sign.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    />
    <script
      src="https://kit.fontawesome.com/04b3229b62.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <?php
  
  include "php_files/config.php";

  $user_list_id = $_GET["user_id"];
  $sql_us =  mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_list_id }")); 
  

  
  ?>
  <body>
    <div class="user-chat">
      <div class="header-user wrapper-lay">
        <header>
          <div class="content">
          <img src="php_files/img/<?php echo $user["img"]?>" alt="" />
            <div class="details">
            <span><?php echo $user["first_name"] . " " . $user["last_name"]?></span>
            </div>
          </div>

          <a href="php_files/log_out.php?user_id=<?php echo $user['unique_id']?>" class="logout">Logout</a>
        </header>
      </div>

      <div class="wrapper-lay lay-home">
        <div class="home-chat">
          <header>
            <a href="home_chat.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>

            <img src="php_files/img/<?php echo  $sql_us["img"]?>" alt="" />
            <div class="details">
            <span><?php echo $sql_us ["first_name"] . " " . $sql_us ["last_name"]?></span>
            </div>
          </header>

          <div class="chat-box-user" id="chatter">


      

          
          </div>
          <form action="#" class="message-chat" autocomplete="off">
          <input type="text" class="data-rec" name="receiver_id" value="<?php echo $user['unique_id']?>">
            <input type="text" class="data-rec" name="sender_id" value="<?php echo $sql_us['unique_id'];?>">
            <input type="text" class="user_input" name="input_send" value="" placeholder="Write a message here...">
            <button><i class="fa-brands fa-telegram"></i></button>
          </form> 
        </section>
      </div>
    </div>
    <script src="config/chat_load.js"></script>
    <script>  </script>
  </body>
</html>
