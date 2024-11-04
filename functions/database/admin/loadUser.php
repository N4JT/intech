<?php
require(__DIR__ ."/../db.php"); 

$user = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $id = $$_POST["user_id"];
    $sql = "SELECT * FROM users where id = $id";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user = $row; 
            http_response_code(201);
            echo json_encode(["data"=>$user]);
        }
    }else{
        echo http_response_code(404);
        echo json_encode(["error"=>"user not found"]);
    }
}
?>