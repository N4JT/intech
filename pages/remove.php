<?php

require('./../functions/utils/getUser.php');
require('./../functions/database/loadData.php');
?>

<form id="orderSelectionForm">
    <label for="orderSelect">Select an Order:</label>
    <select id="orderSelect" name="order_id" onchange="loadOrderData()"> 
        <option value="">Select an order</option>
        <?php foreach ($orders as $order): ?>
            <option value="<?php echo htmlspecialchars($order['order_id']); ?>">
                <?php echo htmlspecialchars($order['title']); ?>
            </option>
        <?php endforeach; ?>
    </select>
</form>

<form id="editOrderForm" action="./../functions/database/remove.php" method="POST" style="display:none;">
    <input type="hidden" name="order_id" id="order_id">
    <input type="submit" value="Remove Order">
</form>

<script>
function loadOrderData() {
    const orderSelect = document.getElementById("orderSelect");
    const orderId = orderSelect.value;

    if (orderId) {
        document.getElementById("order_id").value = orderId;
        document.getElementById("editOrderForm").style.display = "block";
    } else {
        document.getElementById("editOrderForm").style.display = "none";
    }
}
</script>
