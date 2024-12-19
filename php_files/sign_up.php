<?php 
session_start();
include "config.php"; //Instaead of using a lot of mysqli connect, we could use this instead and it automatically connects it to the database.
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$password = mysqli_real_escape_string($conn, $_POST['password']);
$username = $_POST['username'];


//PASSWORD HASH 
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if (!empty($fname) && !empty($lname) && !empty($password) && !empty($username) && !empty($password)) { //If not empty then true. It will pass for the user
    if(!(strlen($username) < 13)) { //A simple code to validate of a user's username.
        echo"$username is not a valid username. MUST be 12 characters long."; //If it's not validate then it will not pass the form.
    }else { //else it's not empty and the username is valid then the it will let pass to user.
        $sqli = mysqli_query($conn, "SELECT username FROM users WHERE username='{$username}'");
        if (mysqli_num_rows($sqli) > 0) {//Detects if the username is already exist,
            echo "$username is already exist!"; //otherwise, false and warns the user that the username is already existed. 
        }else { 
            if (isset($_FILES['img'])) { //A simple code for uploading image from user to our database.
                $pic_name = $_FILES['img']['name']; //Detects if the user upload an image file.
                $pic_tmp = $_FILES['img']['tmp_name'];

                $time = time(); //So, if we want to duplicate our profile picture and wanted a unique names, we will use this. This converst the current time to an integer or what we called unix timesstamp.
                $pic_name_add = $time.$pic_name; //Example: 8:35 am => 1733963746.filenamme.png
                if (move_uploaded_file($pic_tmp, "img/".$pic_name_add)) {
                    $user_id = rand(time(), 1000000); //Creates a unique id for each user. 
                    //This works, converting the current time to unix time, (this lower valu e to return) then randomizes any number which is the max (100000000)

                        //To limit to 7 digits
                        $con_num = strval($user_id);
                        $con_len = substr($con_num, 0, 7);
                        $converted_id = intval($con_len);

                    $sqlid = mysqli_query($conn, "INSERT INTO users (unique_id, first_name, last_name, username, password, img)
                    VALUES ('{$converted_id}', '{$fname}', '{$lname}', '{$username}', '{$hashed_password}', '{$pic_name_add}')");

                    if ($sqlid) {
                        $sqliel = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}'");
                        if (mysqli_num_rows($sqliel) > 0) {
                            $row_data = mysqli_fetch_assoc($sqliel);
                            $_SESSION['unique_id'] = $row_data['unique_id'];
                            echo "success";
                        }
                    } else {
                        echo "Something went wrong!";
                    }
                }else {
                    echo "Please upload your profile picture file!";

            } 
            }
        }
    }
} else {
    echo "All input fields are required. Cannot be empty.";
}



?>
