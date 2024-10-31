<?php
require("./db.php");

if (isset($_GET["order_id"])) {
    $order_id = $_GET["order_id"];
    $sql = "SELECT order_id, title, date FROM orders WHERE order_id = $order_id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        
        echo json_encode([]);
    }
}
?>
 