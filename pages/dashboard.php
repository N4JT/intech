


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
foreach ($orders as $order) {
    echo "<div class=data-container><div>" . htmlspecialchars($order['date']) . " " . htmlspecialchars($order['title']) . "</div> <span class=pajamas--remove></span></div>";
}
?>
</div>
</body>


