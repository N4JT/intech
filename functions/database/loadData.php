<?php
require("db.php"); 
require(__DIR__ . "/../utils/getUser.php");

$orders = [];

$sort = isset($_GET['sort']) && $_GET['sort'] == 1 ? "ASC" : "DESC";
echo "this is soooort: ".$sort;
if(!empty($sort)){
    $sql = "SELECT * FROM orders where userID = $userId ORDER BY date $sort"; 
}else{
    $sql = "SELECT * FROM orders where userID = $userId";
}

    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $orders[] = $row; 
        }
    }else{
        echo "ESTE NEEXISTUJE, SKUS TREBA VYTVORIT JEDNU XD";
    }


?>