<?php

include("generate.php");
include("config.php");

echo '
<form >
<input type="text" name="person_name">
<input type="submit" value="submit">
</form>';

$person_name = @$_POST["person_name"];

 $stmt = $DB_connect->prepare("SELECT person.name , person.id , interview.person_id FROM person, interview where person.name = '$person_name' limit 3");
$stmt->execute($person_name);
$row = $stmt->fetch();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<br>" . $row['name']. "<br />\n";
}


?>