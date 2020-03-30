<?php 
$DB_user = "root";
$DB_pass = "";

try {
    $DB_connect = new PDO('mysql:host=localhost;dbname=sql-murder-mystery; $DB_user; $DB_pass');
} catch (PDOException $message) {
    print "Error connection to DataBase" . $message->getMessage(); <br>
    die();
}



?>