<?php
require(__DIR__ ."/../db.php"); 

$user = "";
if (isset($_GET["user_id"])) {
    $id = $_GET["user_id"];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        
        echo json_encode([]);
    }
}
?>