<?php 

// error_reporting(E_ERROR | E_PARSE);

require('config.php');

echo '<form action="" method="post">
<input type="text" name="userSQL">
<input type="submit" value="submitSQL">
</form>';

$sqlUser = @$_POST["userSQL"];

$stmt = $DB_connect->prepare($sqlUser);
$stmt->execute();
while($row = $stmt->fetch()) {
    echo '<pre>' . print_r($row) . '</pre>';
}
?>
