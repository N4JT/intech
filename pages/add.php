<?php
echo "
<form method='POST' action='./../functions/database/createNew.php'>
    <label for='title'>Title:</label>
    <input type='text' id='title' name='title' required>
    <br>
    <label for='date'>Datum:</label>
    <input type='date' id='date' name='date' required>
    <br>
    <input type='submit' value='Create NEW'>
</form>
";
?>
