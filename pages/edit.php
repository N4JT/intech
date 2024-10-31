<?php
include "./components/head.php";
require('./../functions/utils/getUser.php');
require('./../functions/database/loadData.php');
?>
<div class="data-container">
    <div class="data-content">

<form id="editOrderForm" class="data-form" action="./../functions/database/edit.php" method="POST">
    
<label for="orderSelect">Select an Order:</label>
    <select id="orderSelect" name="order_id" onchange="loadOrderData()"> 
        <option value="">Select an order</option>
        <?php foreach ($orders as $order): ?>
            <option value="<?php echo htmlspecialchars($order['order_id']); ?>">
                <?php echo htmlspecialchars($order['title']); ?>
            </option>
        <?php endforeach; ?>
    </select>

<input type="hidden" name="order_id" id="order_id">
    
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
    
    <input type="submit" value="Update Order">
</form>
    </div>
</div>


<script>
function loadOrderData() {
    const orderSelect = document.getElementById("orderSelect");
    const orderId = orderSelect.value;

    if (orderId) {
        
        fetch(`./../functions/database/getSpecificOrder.php?order_id=${orderId}`)
            .then(response => response.json())
            .then(data => {
               
                document.getElementById("order_id").value = data.order_id;
                document.getElementById("title").value = data.title;
                document.getElementById("date").value = data.date;
               
            });
    } else {
      
    }
}
</script>