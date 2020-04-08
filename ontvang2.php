
<?php 


include("config.php");

$sql = "SELECT * FROM person ORDER BY rand() Limit 2 ";

$sql_exc = $DB_connect->prepare($sql);
$sql_exc->execute();

$search = $DB_connect->query($sql);
$row = $search->fetch(PDO::FETCH_ASSOC);

while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
     echo '</br>' . $row["name"] . '</br>'; 
}
?>
