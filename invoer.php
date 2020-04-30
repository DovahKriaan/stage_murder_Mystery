<?php 

require('config.php');

echo '<form action="" method="post">
<input type="text" name="userSQL">
<input type="submit" value="submitSQL">
</form>';

//get the users input to use in the sql query
$sqlUser = @$_POST["userSQL"];

//connect, execute and fetch from the database and show the output within a pre.
$stmt = $DB_connect->prepare($sqlUser);
$stmt->execute();
while($row = $stmt->fetch()) {
    echo '<pre>' . print_r($row) . '</pre>' . '<br>';
}

?>