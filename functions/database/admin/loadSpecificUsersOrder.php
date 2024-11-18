<?php
require(__DIR__ ."/../db.php"); 

if (isset($_POST["user_id"])) {
    $user_id = $_POST["user_id"];
    $sql = "SELECT  date FROM orders WHERE userID = $user_id AND date >= CURDATE() 
ORDER BY date ASC 
LIMIT 1; ";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode([]);
    }
}
?>
 