

<?php 
$selecteduserId = $_GET["user_id"] ?? null;
?>
<div class="data-container">
    <div class="data-content">
        <form id="edituserForm" class="data-form" action="./../functions/database/edit.php" method="POST">
            <label for="userSelect">Select an user:</label>

            <input type="hidden" name="user_id" id="user_id" value=<?php echo $selecteduserId?>>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="role">Role:</label>
            <input type="text" id="role" name="role" required>
            <label for="reservations"></label>
            
            <input type="submit" value="Update user">
        </form>
    </div>
</div>
<script>
function loadUserData() {
    const userSelect = document.getElementById("user_id");
    const userId = userSelect.value;
    
        fetch(`./../../functions/database/admin/loadUser.php?user_id=${userId}`)
            .then(response => response.json())
            .then(data => {
              
                document.getElementById("user_id").value = data.id;
                document.getElementById("username").value = data.username;
                document.getElementById("role").value = data.role;
            });
    
}

loadUserData();
</script>