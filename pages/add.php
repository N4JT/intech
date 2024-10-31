
<?php
include "./components/head.php";
?>
<div class="data-container">
    <div class="data-content">
    <form method='POST' class="data-form" action='./../functions/database/createNew.php'>
    <h2 class="nadpis">OBJEDNAJ</h2>
    <label for='title'>Title:</label>
    <input type='text' id='title' name='title' required>
    <br>
    <label for='date'>Datum:</label>
    <input type='date' id='date' name='date' required>
    <br>
    <input type='submit' value='Create NEW'>
</form>
    </div>
</div>



