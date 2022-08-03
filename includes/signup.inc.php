<?php
session_start();

//Grabbing the data
if(isset($_POST["submit"])){
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    $_SESSION["uname"] = $uname;
    $_SESSION["email"] = $email;
}else{
    header("location: ../signup.php");
}

//Instantiate SignupContr class




//Running error handlers and user signup


//Going to back to front page
go("Register successfully!", "../login.php");

?>