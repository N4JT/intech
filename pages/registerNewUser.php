<?php
include "./components/head.php";
?>

<div class="data-container">
    <div class="data-content">
    
    <form method='POST' class="data-form" action='./../functions/database/register.php'>
    <h1 class="nadpis">Register new user</h1>
    <label for='username'>his username:</label>
    <input type='text' id='username' name='username' required>
    <br>
    <label for='password'>his password:</label>
    <input type='password' id='password' name='password' required>
    <br>
    <input type='submit' value='Register'>
</form>
    </div>

</div>