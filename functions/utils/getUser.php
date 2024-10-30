<?php
$userId = $_COOKIE["user_id"];
$username = $_COOKIE["username"]; 
if(empty($userId) || empty($username)){ 
    header("Location: ./../pages/403.php");
}
?>