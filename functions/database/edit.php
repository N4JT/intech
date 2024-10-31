<?php
require("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST["order_id"];
    $title = $_POST["title"];
    $date = $_POST["date"];
    $sql = "UPDATE orders SET title = '$title', date = '$date' WHERE order_id = $order_id";
    if ($conn->query($sql) === TRUE) {
        echo "Order updated successfully.";
        header("Location: /intech/pages/dashboard.php");
    } else {
        echo "Error updating order: " . $conn->error;
    }
}
?>