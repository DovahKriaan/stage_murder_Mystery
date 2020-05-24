<?php 

// error_reporting(E_WARNING);

require('config.php');

$stmt = $DB_connect->prepare("SELECT * from person order by rand()");
$stmt->bindParam(":random_int", $random_int);
$stmt->execute();

$rowForZin = $stmt->fetch(PDO::FETCH_ASSOC);
$rowForZinSecondStreet = $stmt->fetch(PDO::FETCH_ASSOC);

echo " there were 2 witness, 1 lived at " . $rowForZin["address_street_name"] . " and the second one is called " . $rowForZin["name"] . " and lives somewhere at " . $rowForZinSecondStreet["address_street_name"];
echo "<br>" . "<br>";
echo '<form action="" method="post">
<input type="text" name="userSQL">
<input type="submit" value="submitSQL">
</form>';

//get the users input to use in the sql query
$sqlUser = @$_POST["userSQL"];

//connect, execute and fetch from the database and show the output within a pre.
$stmt2 = $DB_connect->prepare($sqlUser);
$stmt2->execute();


while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
    echo "<br>" . "<br>";
}
echo "the form below is for checking your solution :  <br><br>";

CheckSolution();

function CheckSolution(){

    echo '<form action="" method="post">
    <input type="text" name="userSQLSolution">
    <input type="submit" value="submit your SQL Solution">
    </form>';

    $userSQLSolution = @$_POST['userSQLSolution'];
  
    if ($userSQLSolution == "") {
            echo "";
        }
        else{
            if ($userSQLSolution == 'Tama' || $userSQLSolution == 'tama') {
               echo "you were right you get a promotion!";
            }
            else{
                echo "sorry you are wrong detective";
            }
        }
    
}


?>