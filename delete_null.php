<?php 

require("config.php");


<<<<<<< HEAD
$stmt = $DB_connect->prepare("DELETE FROM `interview` WHERE `person_id` = 10141");
=======
<<<<<<< HEAD
$stmt = $DB_connect->prepare("DELETE FROM `interview` WHERE `person_id` = 10141");
=======
$stmt = $DB_connect->prepare("DELETE FROM `get_fit_now_check_in` WHERE `membership_id` IS NULL");
>>>>>>> 2e3007ebadc8d1ae23db457fae2af85d2186b812
>>>>>>> e7172ad8f013f54942c3f98928dd4232bfd1d8bb
$stmt->execute();


if ($stmt) {
    echo "it's been done";
}
else {
    echo "it was not successfull";
}


?>