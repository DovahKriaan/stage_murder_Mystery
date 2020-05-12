<?php 

require('config.php');
error_reporting(E_ALL);
echo '<form action="" method="post">
<input type="text" name="userSQL">
<input type="submit" value="submitSQL">
</form>';

//get the users input to use in the sql query
$sqlUser = @$_POST["userSQL"];

//connect, execute and fetch from the database and show the output within a pre.
$stmt = $DB_connect->prepare("SELECT membership_id from get_fit_now_check_in order by rand()");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     print_r($row);
// }

for ($i=0; $i < 5 ; $i++) { 
    RandMember();
}
    

//insert into the database with earlier fetched data

//create random dates =
function RandMember(){
    include("config.php");
    
    $stmt = $DB_connect->prepare("SELECT membership_id, check_in_time, check_out_time from get_fit_now_check_in WHERE `membership_id` LIKE '3F8N0' order by rand()");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $randomDay = rand(1,31);
    $randomYear = 2020;
    $randomMonth = rand(1,12);
    $minutes = rand(0,60);
    $hours_in = rand(6,12);
    $hours_out = rand(13,20);

    if ($randomDay < 10 ) {
        $randomDay = sprintf("%02d", $randomDay);
    }

    if ($randomMonth < 10) {
       $randomMonth = sprintf("%02d", $randomMonth);
    }
    if ($minutes < 10) {
        $minutes = sprintf("%02d", $minutes);
     }
     if ($hours_in < 10) {
        $hours_in = sprintf("%02d", $hours_in);
     }
     if ($hours_out < 10) {
        $hours_out = sprintf("%02d", $hours_out);
     }


$stmt = $DB_connect->prepare("INSERT INTO get_fit_now_check_in 
(check_in_date,
membership_id,
check_in_time,
check_out_time)
VALUES(:randomDate, :membership_id, :check_in_time, :check_out_time)");

$stmt->bindParam(':randomDate', $randomDate);
$stmt->bindParam(':membership_id', $membership_id);
$stmt->bindParam(':check_in_time', $check_in_time);
$stmt->bindParam(':check_out_time', $check_out_time);

$randomDate = $randomYear . $randomDay . $randomMonth;
$membership_id = $row['membership_id'];
$check_in_time = $hours_in . $minutes;
$check_out_time = $hours_out . $minutes;
var_dump($check_in_time);

$stmt->execute();


}

?>