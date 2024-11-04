


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
        window.location.href = `./edit.php?order_id=${id}`;
    };

    const handleRemove = (id) => {
        window.location.href = `./remove.php?order_id=${id}`;
    }
    </script>
    
<div class="data-container">
   
<?php
foreach ($users as $user) {
    echo "<div class=data-content><div>" . htmlspecialchars($user['id']) . "</div> <div>" . htmlspecialchars($user['username']) . "</div><div class=data-icons><span class=material-symbols--edit onClick=handleEdit(".htmlspecialchars($user['username']) .")></span> <span class=pajamas--remove onClick=callPopup(".htmlspecialchars($user['username']) .")></span></div></div>";
    echo "<div class=line></div>";
}

?>
<div class="data-content-button">
<span class="mdi--add"></span>
</div>  
</div>
</div>

</body>


