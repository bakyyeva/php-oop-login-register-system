<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <div class="first">
            <a href="index.php"> 
                <p>Uzuk</p> 
                <p style="font-size: 1.2rem; margin-top:0;">BAKYYEVA</p>
            </a>
        </div>
        <nav>
           <ul class="nav-list">
            <li> <a href="index.php">HOME</a> </li>
            <li> <a href="#">ABOUT US</a> </li>
            <li> <a href="#">CONTACT</a> </li>
            <li> <p style="font-size: 3rem;"> | </p> </li> 
            <li>
                <p class="name">
                    <?php 
                    if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true){ 
                        echo htmlentities($_SESSION['uname']);
                        echo " ";
                        echo "<a href='includes/logout.inc.php' style='margin-left:2rem'> <img src='images/logout.png'>  </a>";
                    }else {
                    ?>
                </p>
            </li>      
            <li> <a href="login.php">LOGIN</a> </li>
            <li> <a href="signup.php">SIGN UP</a> </li>
            <?php } ?>
           </ul>
        </nav>
    </header>
    <main>
       HOME PAGE
    </main>
</body>
</html>