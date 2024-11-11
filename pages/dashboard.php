


<?php
include "./components/head.php";
include './../functions/utils/getUser.php';
include "./../functions/database/loadData.php";

?>

<?php
include './components/menu.php';
?>
<div class="content">
    <h1 class=nadpis>
        DASHBOARD
    </h1>


<script>
     const handleEdit = (id) => {
        window.location.href = `./edit.php?order_id=${id}`;
    };

    const handleRemove = (id) => {
        window.location.href = `./remove.php?order_id=${id}`;
    }
    </script>
    
<div class="data-container">
   <div class="data-content"><div class="full">DATUM</div><div>TITLE</div><div class="data-icons"></div></div>
<?php
foreach ($orders as $order) {
    echo "<div class=data-content><div class=full>" . htmlspecialchars($order['date']) . "</div> <div>" . htmlspecialchars($order['title']) . "</div><div class=data-icons><span class=material-symbols--edit onClick=handleEdit(".htmlspecialchars($order['order_id']) .")></span> <span class=pajamas--remove onClick=handleRemove(".htmlspecialchars($order['order_id']) .")></span></div></div>";
    echo "<div class=line></div>";
}

?>
<div class="data-content-button">
<span class="mdi--add"></span>
</div>  
</div>
</div>

</body>


