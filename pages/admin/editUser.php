

<?php 
$selecteduserId = $_GET["user_id"] ?? null;
?>
<div class="data-container">
    <div class="data-content">
        <form id="edituserForm" class="data-form" action="./../functions/database/edit.php" method="POST">
            <label for="userSelect">Select an user:</label>
            <select id="userSelect" name="user_id" onchange="loadUserData()"> 
                <option value="">Select an user</option>
                <?php foreach ($users as $user): ?>
                    <option value="<?php echo htmlspecialchars($user['id']); ?>" 
                        <?php echo ($selecteduserId == $user['id']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($user['username']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <input type="hidden" name="user_id" id="user_id">
            
            <label for="title">Username:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <label for="reservations"></label>
            
            <input type="submit" value="Update user">
        </form>
    </div>
</div>
<script>
function loadUserData() {
    const orderSelect = document.getElementById("user_id");
    const orderId = orderSelect.value;
    
        fetch(`./../functions/database/admin/loadADminData.php?order_id=${orderId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById("order_id").value = data.order_id;
                document.getElementById("title").value = data.title;
                document.getElementById("date").value = data.date;
            });
    
}

loadUserData();
</script>