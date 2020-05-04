<?php

include("config.php");

// $person_name = @$_POST["person_name"];
//trying to get the table names outputted to screen
 $stmt = $DB_connect->prepare("SELECT TABLE_SCHEMA from `sql-murder-mystery.INFORMATION_SCHEMA.TABLES` WHERE TABLE_TYPE = 'BASE TABLE'");
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   print_r( $row);
}


?>