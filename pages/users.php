


<?php
include "./components/head.php";
include './../functions/utils/getUser.php';
include "./../functions/database/admin/loadADminData.php";

?>


<div class="content">
    <h1 class=nadpis>
        USERS
    </h1>

<?php
include './components/menu.php';
?>
<script>
     const handleEdit = (id) => {
        window.location.href = `./editUser.php?user_id=${id}`;
    };

    const handleRemove = (id) => {
        window.location.href = `./removeUser.php?user_id=${id}`;
    }
    const handleAddNew = () => { 
        window.location.href = "./registerNewUser.php";
    }
    </script>
    
<div class="data-container">
    <div class="data-content"><div>USER ID</div> <div>USERNAME</div> <div>ROLE</div><div>RESERVATIONS</div><div class="data-icons"><span class="material-symbols--edit"></span> <span class="pajamas--remove"></span></div></div>
<?php
foreach ($users as $user) {
    
        echo "<div class=data-content><div>" . htmlspecialchars($user['id']) . "</div> <div>" . htmlspecialchars($user['username']) . "</div> <div class=role> ".htmlspecialchars($user["role"])." </div><div>reservations</div> <div class=data-icons><span class=material-symbols--edit onClick=handleEdit(".htmlspecialchars($user['id']) .")></span> <span class=pajamas--remove onClick=handleRemove(".htmlspecialchars($user['id']) .")></span></div></div>";
        echo "<div class=line></div>";
        
   
}

?>
<div class="data-content-button"  onClick="handleAddNew()">
<span class="mdi--add"></span>
</div>  
</div>
</div>

</body>


