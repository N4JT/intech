

<?php 
include "./components/head.php";

    
$selecteduserId = $_GET["user_id"] ?? null;
?>
<div class="data-container">
    <div class="data-content">
        <form id="edituserForm" class="data-form" action="./../functions/database/admin/updateUser.php" method="POST">
            <label for="userSelect">Select an user:</label>

            <input type="hidden" name="user_id" id="user_id" value=<?php echo $selecteduserId?>>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="role">Role:</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <label for="reservations"></label>
            <div id="reservations"></div>
            <input type="submit" value="Update user">
        </form>
    </div>
</div>
<script>
function loadUserData() {
    const userId = document.getElementById("user_id").value;

    // Check if a user ID is provided before making the fetch request
    if (userId) {
        fetch(`./../functions/database/admin/loadUser.php?user_id=${userId}`)
            .then(response => response.json())
            .then(data => {
                
                document.getElementById("user_id").value = data.user.id;
                document.getElementById("username").value = data.user.username;
                document.getElementById("role").value = data.user.role;
                
                
                const reservations = document.getElementById("reservations");
                reservations.innerHTML = ""; 
                
                if (data.orders.length > 0) {
                    const button = document.createElement("button");
                    button.className = "data-button";
                    button.textContent = "Show Reservations";
                    
                   
                    button.onclick = function() {
                        openPopup(data.orders);
                    };
                    
               
                    reservations.appendChild(button);
                }
            })
            .catch(error => console.error("Error fetching user data:", error));
    }
}

document.addEventListener("DOMContentLoaded", loadUserData);

</script>