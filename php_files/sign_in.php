<?php
    session_start();
    include_once "config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if (!empty($username) && !empty($password)) {

        $user_info = mysqli_query($conn,"SELECT * FROM users WHERE username = '{$username}'");
        if (mysqli_num_rows($user_info) > 0) {

            $row_data = mysqli_fetch_assoc($user_info);
            $hashedPassword = $row_data['password'];
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['unique_id'] = $row_data['unique_id'];
                echo "success";
            } else {
                echo "Your password is invalid.";
            }

           
           
        }else {
            echo "username or password is incorrect. Please try again.";
        }
    } else {
        echo "All input fields are required. Cannot be empty.";
    }



?>