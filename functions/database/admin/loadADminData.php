<?php
require(__DIR__ ."/../db.php"); 


$users = [];
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row; 
        }
    }else{
        
    }


?>