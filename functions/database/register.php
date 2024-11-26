<?php

require ("./db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_check = "SELECT * FROM xmestanekt_users WHERE username = '$username'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<h1 class=NADPIS>Pouzivatel uz existuje,skus to znova</h1>";
        header("refresh:1;url=./../../pages/register.php");
    } else {
        $sql = "INSERT INTO xmestanekt_users (username, password, role) VALUES ('$username', '$password', 'user')";
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Registracia uspesna, teraz sa musis prihlasit.</h1>";
            header("refresh:1;url=./../../pages/login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
