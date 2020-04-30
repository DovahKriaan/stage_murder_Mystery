<?php

include("config.php");

// $person_name = @$_POST["person_name"];

 $stmt = $DB_connect->prepare("SELECT crime_scene_report.description FROM crime_scene_report where crime_scene_report.description = `Security footage shows that there were 2 witnesses. The first witness lives at the last house on Gustavus Blvdr. The second witness, named Annabel, lives somewhere on E Glen Park Ave.`"); 
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