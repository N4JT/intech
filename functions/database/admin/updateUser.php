<?php 

require(__DIR__ ."/../db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $role = $_POST["role"];
    $username = $_POST["username"];
    $id = $_POST["user_id"];

    $sql = "UPDATE users SET username = '$username', role = '$role' WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {  
        header("Location: ./../../../pages/users.php");
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }
}
?>
