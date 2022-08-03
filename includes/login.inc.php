<?php 

if(isset($_POST["submit"])){
    $uname = $_POST["username"];
    $pwd = $_POST["pwd"];
}

include "function.inc.php";
include "../classes/db.class.php";
include "../classes/login.class.php";
include "../classes/login-contr.class.php";


$login = new LoginContr($uname, $pwd);
$login->loginUser();

?>