<?php
require("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST["order_id"];

    $sql = "DELETE FROM orders WHERE order_id = $order_id";

    if ($conn->query($sql) === TRUE) {
        echo "Order deleted successfully.";
        header("Location: /intech/pages/dashboard.php");
    } else {
        echo "Error deleting order: " . $conn->error;
    }
}
?>