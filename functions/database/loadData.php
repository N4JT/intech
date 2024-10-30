<?php
require("db.php"); 
require(__DIR__ . "/../utils/getUser.php");

$orders = [];
    $sql = "SELECT * FROM orders where userID = $userId";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $orders[] = $row; 
        }
    }else{
        echo "ESTE NEEXISTUJE, SKUS TREBA VYTVORIT JEDNU XD";
    }


?>