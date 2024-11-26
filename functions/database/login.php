<?php

require("./db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(!empty($username) || empty($password)){
        $sql = "SELECT * FROM xmestanekt_users where username='$username' AND password='$password'";
        $result = $conn->query($sql);   
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                setcookie("user_id",$row["id"],0,"/");
                setcookie("username",$row["username"],0,"/");
                setcookie("role",$row["role"],0,"/"); //pre bezpecnost bych mal fetchnut userID z databazy ale vcilej to je jedno
                header( "Location: ./../../pages/dashboard.php");
            }
        } else {
            echo "<h1>Prihlasenie sa nepodarilo, skus to znova </h1>";
            header("refresh:1;url=./../../pages/login.php");
        }
        
    }
}
?>