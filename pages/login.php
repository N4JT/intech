<?php
include "./components/head.php";
?>
<div class="data-container">
    <div class="data-content">
    
    <form method='POST' class="data-form" action='./../functions/database/login.php'>
    <h1 class="nadpis">LOGIN</h1>
    <label for='username'>Username:</label>
    <input type='text' id='username' name='username' required>
    <br>
    <label for='password'>Password:</label>
    <input type='password' id='password' name='password' required>
    <br>
    <input type='submit' value='LOGIN'>
</form>
    </div>

</div>



