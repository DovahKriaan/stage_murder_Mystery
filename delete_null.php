<?php 

require("config.php");


$stmt = $DB_connect->prepare("DELETE FROM `get_fit_now_check_in` WHERE `membership_id` IS NULL");
$stmt->execute();


if ($stmt) {
    echo "it's been done";
}
else {
    echo "it was not successfull";
}


?>