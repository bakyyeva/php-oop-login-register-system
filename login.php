<?php
session_start();
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
<main>
    <div class="login-box">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="POST">
          <div class="user-box" style="margin-top: 25px;">
            <input type="text" name="username" placeholder="User name" required>
          </div>
          <div class="user-box">
            <input type="password" name="pwd" placeholder="Password" required>
          </div>
          <div class="login-row" style="margin-top: 40px;">
            <div class="login-left">    
              <p> Don't have an account yet? </p>   
                <p><a href="signup.php"> Sign up</a> here!</p>
            </div>
            <div class="login-right"><input type="submit" name="submit" value="Login"></div>
          </div> 
        </form>
      </div>
</main>
</body>
</html>