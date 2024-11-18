<?php
include "./components/head.php";
require('./../functions/database/getUser.php');

$selecteduserId = $_GET["user_id"] ?? null;
if(isset($selecteduserId)){
    $user = getUser($selecteduserId); 
}
?>

<body>
<div class="data-container">
<div class="data-content">
<form id="edituserForm" class="data-form" action="./../functions/database/admin/removeUser.php" method="POST">
            <h3 for="userSelect">Si si isty, ze chces odstranit pouzivatela</h3>
            <h1 class="NADPIS"><?php echo $user[0]["username"] ?></h1>
            <input type="hidden" name="user_id" id="user_id" value=<?php echo $selecteduserId?>>
            
            <input type="submit" value="ODSTRANIT">
        </form>

</div>
</div>

</body>