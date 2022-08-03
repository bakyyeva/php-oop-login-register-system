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
    <title>Sign up</title>
    <link rel="stylesheet" href="style/signup.css">
</head>
<body>
<main>
    <div class="login-box">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="POST">
          <div class="user-box" style="margin-top: 25px;">
          </div>
          <div class="user-box">  
          </div>
          <div class="user-box">
            <input type="password" name="pwd" placeholder="Password" required>
          </div>
          <div class="user-box">
            <input type="password" name="pwdRepeat" placeholder="Password(Repeat)" required>
          </div>
          <div class="login-row" style="margin-top: 40px;">
            <div class="login-left">
              <a href="login.php">Login</a>
            </div>
            <div class="login-right"><input type="submit" name="submit" value="Sign up"></div>
          </div>
        </form>
      </div>
</main>
</body>
</html>