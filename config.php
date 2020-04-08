<?php 
$DB_user = "root";
$DB_pass = "";

try {
    $DB_connect = new PDO('mysql:host=localhost;dbname=sql-murder-mystery', 'root', '');
} catch (PDOException $message) {
    print "Error connection to DataBase" . $message->getMessage(); 
    die();
}


?>