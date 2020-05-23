<?php 

require("config.php");


$stmt = $DB_connect->prepare("DELETE FROM `interview` WHERE `person_id` = 10141");
$stmt->execute();


if ($stmt) {
    echo "it's been done";
}
else {
    echo "it was not successfull";
}


?>