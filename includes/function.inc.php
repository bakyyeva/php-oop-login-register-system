<?php
function go($message, $address){
    echo("<script LANGUAGE = 'Javascript'>     
        window.alert('$message');
        window.location.href = '$address';
    </script>");
}
?>