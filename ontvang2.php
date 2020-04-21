
<?php 


include("config.php");

$sql = "SELECT person.name, interview.transcript FROM interview, person WHERE interview.person_id = person.id ORDER BY RAND() limit 2";

$sql_exc = $DB_connect->prepare($sql);
$sql_exc->execute();

$search = $DB_connect->query($sql);
$row = $search->fetch(PDO::FETCH_ASSOC);

while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
     echo '</br>' . $row["name"] . '</br>'; 
     echo '</br>' . $row["transcript"] . '</br>'; 
    
}
?>
