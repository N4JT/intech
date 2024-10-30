<?php

require("./db.php");
require ('./../functions/utils/getUser.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $date = $_POST["date"];
    $title = $_POST["title"];
    $sql = "INSERT INTO orders (order_id, title, date, userID) VALUES (null,'Product Name', '2024-10-30',$user_id)";
    $result = $conn->query($sql);  
    if ($conn->query($sql) === TRUE) {
        echo "executed takze by to melo fungovat LULW";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>