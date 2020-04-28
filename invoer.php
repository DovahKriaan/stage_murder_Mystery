<?php 

require('config.php');

echo '<form action="" method="post">
<input type="text" name="userSQL">
<input type="submit" value="submitSQL">
</form>';

$sqlUser = @$_POST["userSQL"];

$stmt = $DB_connect->prepare($sqlUser);
$stmt->execute();
$row = $stmt->fetch(\PDO::FETCH_ASSOC);

$select = "select";
$newSQL = substr($sqlUser, 0, strpos($sqlUser, "from"));
$fullSQL = substr_replace($select, "", 0);

@$completeSQL = $fullSQL + $newSQL;


foreach ($row as $item) {
    // var_dump($item);
    // $val = $item[$completeSQL];
    echo '<input type="text" value="' . $item . '">' . '</input>';
}

?>

