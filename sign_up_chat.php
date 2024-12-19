

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link rel="stylesheet" href="sign.css" />
  
    
    <script
      src="https://kit.fontawesome.com/04b3229b62.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="user-chat sign-log">
      <div class="wrapper-lay">
        <section class="form sign-up">
          <header><h2>Sign up</h2></header>
          <form action="#" enctype="multipart/form-data">
            <div class="error-warn">This error message</div>
            <div class="sign-up-details">
              <div class="text-field input-user ext">
                <input type="text" name="first_name" placeholder="Enter your first name" required/>
              </div>
              <div class="text-field input-user ext">
                <input type="text" name="last_name" placeholder="Enter your last name" required/>
              </div>
            </div>
            <div class="text-field input-user">
              <input type="text" name="username" placeholder="Enter your username" required/>
            </div>
            <div class="text-field input-user">
              <input type="password" name="password" placeholder="Enter your passsword" required/>
              <i class="fas fa-eye"></i>
            </div>
            <div class="text-field img">
              <label class="title-input">Select your profile picture</label>
              <input type="file" name="img"/>
            </div>
            <div class="text-field btn">
              <input type="submit" value="Sign Up" />
              <h2></h2>
            </div>
          </form>
          <div class="link-log">
            Already signed up? <a href="sign_in_chat.php">Login now</a>
          </div>
        </section>
      </div>
    </div>

    <script src="/config/show.js"></script>
    <script src="/config/sign.js"></script>
  </body>
</html>
