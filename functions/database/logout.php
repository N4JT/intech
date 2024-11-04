<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    setcookie("user_id","",time() - 3600,"/");
    setcookie("username","",time() -3600,"/");
    header( "Location: ./../../pages/login.php");
}
?>