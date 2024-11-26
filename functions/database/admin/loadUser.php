<?php
require(__DIR__ ."/../db.php"); 

$response = ["user" => null, "orders" => []];

if (isset($_GET["user_id"])) {
    $id = $_GET["user_id"];
    
    $sql = "SELECT * FROM xmestanekt_users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $response["user"] = $result->fetch_assoc();
    }

    $sql2 = "SELECT * FROM xmestanekt_orders WHERE userID = $id";
    $result2 = $conn->query($sql2);
    if ($result2 && $result2->num_rows > 0) {
        while ($order = $result2->fetch_assoc()) {
            $response["orders"][] = $order;
        }
    }


    echo json_encode($response);
}
?>
