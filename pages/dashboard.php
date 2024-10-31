


<?php
include "./components/head.php";
include './../functions/utils/getUser.php';
include "./../functions/database/loadData.php";

?>


<div class="content">
    <h1 class=nadpis>
        DASHBOARD
    </h1>

<?php
include './components/menu.php';
?>
<div class="data-container">
   
<?php
foreach ($orders as $order) {
    echo "<div class=data-content><div>" . htmlspecialchars($order['date']) . "</div> <div>" . htmlspecialchars($order['title']) . "</div><div class=data-icons><span class=material-symbols--edit></span> <span class=pajamas--remove></span></div></div>";
    echo "<div class=line></div>";
}

?>
<div class="data-content-button">
    createNEW
</div>
</div>
</div>
</body>


