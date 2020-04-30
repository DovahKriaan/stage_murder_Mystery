<?php 

error_reporting(E_WARNING);

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
$fetchRow = $row = $stmt->fetch(\PDO::FETCH_BOUND);

for ($i=0; $i < $row ; $i++) { 
    
    if($row[$i] != null){
            echo '<pre>' . $row[$i] . '</pre>' . '<br>';
    }
    else {
        break;
        }
    
}

?>