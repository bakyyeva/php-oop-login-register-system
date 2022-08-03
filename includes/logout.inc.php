<?php
session_start();
session_destroy();
$_SESSION = null;

//Going to back to front page
header("Location: ../index.php");
?>