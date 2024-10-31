<?php
include "./components/head.php";
require('./../functions/utils/getUser.php');
require('./../functions/database/loadData.php');
?>

<div class="data-container">
    <div class="data-content">
    <form id="editOrderForm" class="data-form" action="./../functions/database/remove.php" method="POST">
<select id="orderSelect" name="order_id" onchange="loadOrderData()"> 
        <option value="">Select an order</option>
        <?php foreach ($orders as $order): ?>
            <option value="<?php echo htmlspecialchars($order['order_id']); ?>">
                <?php echo htmlspecialchars($order['title']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="hidden" name="order_id" id="order_id">
    <input type="submit" value="Remove Order">
</form>
    </div>
</div>


<script>
function loadOrderData() {
    const orderSelect = document.getElementById("orderSelect");
    const orderId = orderSelect.value;

    if (orderId) {
        document.getElementById("order_id").value = orderId;
       
    } 
}
</script>
