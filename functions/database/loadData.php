<?php
require("db.php"); 
require(__DIR__ . "/../utils/getUser.php");



    $sql = "SELECT * FROM orders where userID = $userId";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["order_id"] . " a este " . $row["title"] . " a to je objednano od: " . $row["userID"];
        }
    }else{
        echo "ESTE NEEXISTUJE, SKUS TREBA VYTVORIT JEDNU XD";
    }


?>