
<?php 


include("config.php");

$sql = "SELECT crime_scene_report.description FROM crime_scene_report where crime_scene_report.date = 01012020";

$sql_exc = $DB_connect->prepare($sql);
$sql_exc->execute();

$search = $DB_connect->query($sql);
$row = $search->fetch(PDO::FETCH_ASSOC);

while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
   echo '<br>' . $row["description"] . '<br>'; 
}

?>
