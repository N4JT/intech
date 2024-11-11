<?php
include './../functions/utils/getUser.php';
?>
<body>
<div class="menu-container">
    <div class="menu">
        <ul>
            
      
        <li><a href="./add.php" class="add">PRIDAJ</a></li>
        <li><a href= "./remove.php"  class="remove" >ODOBER</a></li>
        <li><a href= "./edit.php " class="edit" >UPRAV</a></li>
        <li><a href= "./dashboard.php " class= "showall" >ZOBRAZ VSETKY</a></li>

        <?php
        if($role == "admin"){
            echo "  <li><a href=./users.php class=admin>USERS</a></li>";
        }
        
        
        ?> 
             <li><a href="./logout.php" class="logout">ODLHAS SA</a></li>
        </ul>
    </div>
</div> 

