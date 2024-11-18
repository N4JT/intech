<?php
require(__DIR__ ."/../db.php"); 


function getLatestReservation($user_id){ 
    global $conn;
        $sql = "SELECT  date FROM orders WHERE userID = $user_id AND date >= CURDATE() 
    ORDER BY date ASC 
    LIMIT 1; ";
        $result = $conn->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['date']; 
        } else {
            return "No upcoming reservations"; 
        }
    
}

?>
 