<?php
include './../functions/utils/getUser.php';
?>
<body>
<div class="menu-container">
    <div class="menu">
        <a href="./add.php" class="add">PRIDAJ</a>
        <a href= "./remove.php"  class="remove" >ODOBER</a>
        <a href= "./edit.php " class="edit" >UPRAV</a>
        <a href= "./dashboard.php " class= "showall" >ZOBRAZ VSETKY</a>

        <?php
        if($role == "admin"){
            echo " <a href=./admin.php class=admin>USERS</a>";
        }
        
        
        ?> 
        <a href="./logout.php" class="logout">ODLHAS SA</a>
    </div>
</div> 

