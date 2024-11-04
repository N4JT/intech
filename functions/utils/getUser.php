<?php

$userId = $_COOKIE["user_id"];
$username = $_COOKIE["username"]; 
$role = $_COOKIE["role"];
if(empty($userId) || empty($username)){ 
    header("Location: ./../pages/403.php");
}
?>