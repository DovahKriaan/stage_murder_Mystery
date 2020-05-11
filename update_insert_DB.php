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

for ($i=0; $i < 40 ; $i++) { 
    RandMember();
}
    

//insert into the database with earlier fetched data

//create random dates =
function RandMember(){
    include("config.php");

    $stmt = $DB_connect->prepare("SELECT membership_id,check_in_time, check_out_time from get_fit_now_check_in order by rand()");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

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

$randomDate = 2020 . rand(1,12) . rand(1,31);
$membership_id = $row['membership_id'];
$check_in_time = $row['check_in_time'];
$check_out_time = $row['check_out_time'];

$stmt->execute();
}
?>