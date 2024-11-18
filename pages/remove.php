<?php
include "./components/head.php";
require('./../functions/utils/getUser.php');
require('./../functions/database/loadData.php');

$selectedOrderId = $_GET["order_id"] ?? null; 

?>

<div class="data-container">
    <div class="data-content">
        <form id="editOrderForm" class="data-form" action="./../functions/database/remove.php" method="POST">
            <label for="orderSelect">Select an Order:</label>
            <select id="orderSelect" name="order_id" onchange="loadOrderData()">
                <option value="">Select an order</option>
                <?php foreach ($orders as $order): ?>
                    <option value="<?php echo htmlspecialchars($order['order_id']); ?>" 
                        <?php echo ($selectedOrderId == $order['order_id']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($order['title']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="hidden" name="order_id" id="order_id" value="<?php echo $selectedOrderId; ?>">

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


        fetch(`./../functions/database/getSpecificOrder.php?order_id=${orderId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById("order_id").value = data.order_id;
                document.getElementById("title").value = data.title;
                document.getElementById("date").value = data.date;
            })
            .catch(error => {
                console.error("Error fetching order data:", error);
            });
    } else {
        document.getElementById("order_id").value = ''; 
    }
}

<?php if ($selectedOrderId): ?>
   
    loadOrderData();
<?php endif; ?>
</script>
