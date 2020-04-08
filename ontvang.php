<?php 

session_start();

include("config.php");

$sql = "SELECT name FROM person";

$sql_exc = $DB_connect->prepare($sql);
$sql_exc->execute();

$search = $DB_connect->query($sql);
$row = $search->fetch(PDO::FETCH_ASSOC);
function retrieve_data(){
while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
    // echo '</br>' . $row["name"] . '</br>'; 
    
    
}
}
echo '<form method="GET" action="">
    <table>
    <tr>
    <td><input type="text" value="'.$row["name"].'"></td>
    </tr>
    <tr>
    <td></td><td><input type="submit" value="Change"></td>
    </tr>
    
    </table>
    </form>';
?>

