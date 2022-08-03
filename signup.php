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
          <?php if(isset($_SESSION["uname"])){ ?>
            <input type="text" name="username" value="<?= $_SESSION['uname']; unset($_SESSION['uname']); ?>" placeholder="User name" required> 
          <?php }else{ ?>
            <input type="text" name="username" placeholder="User name" required> 
          <?php } ?> 
          </div>
          <div class="user-box"> 
          <?php if(isset($_SESSION["uname"])){ ?>
            <input type="email" name="email" value="<?= $_SESSION['email']; unset($_SESSION['email']); ?>" placeholder="Email" required>  
          <?php }else{ ?>   
            <input type="email" name="email" placeholder="Email" required>
          <?php } ?>
          </div>
          <div class="user-box">
            <input type="password" name="pwd" placeholder="Password" required>
          </div>
          <div class="user-box">
            <input type="password" name="pwdRepeat" placeholder="Password(Repeat)" required>
          </div>
          <?php
             if(isset($_SESSION["error"])) {
              echo "<p style='text-align: center; color: red; font-size: 1.6rem;'>";
              echo $_SESSION["error"];
              echo "</p>";
             }
             unset($_SESSION["error"]);
          ?>
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