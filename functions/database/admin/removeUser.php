<?php 

require(__DIR__ ."/../db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $id = $_POST["user_id"];

    $sql = "DELETE from xmestanekt_users where id = $id";
    $result = $conn->query($sql);

    if ($result) {  
        header("Location: ./../../../pages/users.php");
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }
}
?>
