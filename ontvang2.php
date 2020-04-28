<?php

include("config.php");

// $person_name = @$_POST["person_name"];

 $stmt = $DB_connect->prepare("SELECT crime_scene_report.description FROM person, crime_scene_report limit 2");
$stmt->execute();
$row = $stmt->fetch();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<br>" . $row['description']. "<br />\n";
}

echo '<br>
<form action="generate.php" >
<input type="submit" value="continue">
</form>';
?>