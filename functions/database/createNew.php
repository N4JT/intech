<?php

require("db.php");
require(__DIR__ . "/../utils/getUser.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $date = $_POST["date"];
    $title = $_POST["title"];
    $sql = "INSERT INTO orders (order_id, title, date, userID) VALUES (null,'$title', '$date',$userId)";
    if ($conn->query($sql) === TRUE) {
        echo "executed takze by to melo fungovat LULW";
        header("Location: /intech/pages/dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>