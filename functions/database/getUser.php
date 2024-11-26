<?php
require("db.php"); 



function getUser($userId){ 
    global $conn;
    $sql = "SELECT * FROM xmestanekt_users where id = $userId";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row; 
        }
        return $results;
    }else{
        return null;
    }
}
   


?>