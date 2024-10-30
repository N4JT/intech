<?php

require("./db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(!empty($username) || empty($password)){
        $sql = "SELECT * FROM users where username='$username' AND password='$password'";
        $result = $conn->query($sql);   
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                setcookie("user_id",$row["id"],0,"/");
                setcookie("username",$row["username"],0,"/");
                header( "Location: ./../../pages/dashboard.php");
            }
        } else {
            echo "No user found with these credentials";
        }
        
    }
}
?>