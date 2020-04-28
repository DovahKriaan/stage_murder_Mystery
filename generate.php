<?php 

include("config.php");

$stmt = $DB_connect->prepare("SELECT * FROM interview");
$stmt->execute();
$row = $stmt->fetch();

echo $row["transcript"] . "<br>";


echo '<br>
<form action="invoer.php" >
<input type="submit" value="continue">
</form>';
?>