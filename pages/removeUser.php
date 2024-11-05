<?php
$selecteduserId = $_GET["user_id"] ?? null;
?>

<body>
<form id="edituserForm" class="data-form" action="./../functions/database/admin/removeUser.php" method="POST">
            <label for="userSelect">Si si isty, ze chces odstranit pouzivatela?</label>

            <input type="hidden" name="user_id" id="user_id" value=<?php echo $selecteduserId?>>
            
            <input type="submit" value="remove user">
        </form>

      
</body>