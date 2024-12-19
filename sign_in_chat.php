

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN IN</title>
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


  <body>
    <div class="user-chat sign-log">
      <div class="wrapper-lay">
        <section class="form sign-up">
          <header><h2>Sign in</h2></header>
          <form action="#" autocomplete="off">
            <div class="error-warn">This error message</div>
            <div class="text-field input-user">
              <input type="text" name="username" placeholder="Enter your username" />
            </div>
            <div class="text-field input-user">
              <input type="password" name="password" placeholder="Enter your passsword" />
              <i class="fas fa-eye"></i>
            </div>
            <div class="text-field btn">
              <input type="submit" value="Sign In Now" />
              <h2></h2>
            </div>
          </form>
          <div class="link-log">
            Don't have account? <a href="sign_up_chat.php">Sign Up now</a>
          </div>
        </section>
      </div>
    </div>
    <script src="/config/show.js"></script>
    <script src="/config/sign_in.js"></script>
  </body>
</html>
