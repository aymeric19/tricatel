<?php

$servername = 'localhost';
$dbname = 'tricatel';
$db_username = 'root';
$db_password = 'megan';
//megan ma preter son pc XD

try{
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
catch (PDOException $e){
    echo $e->getMessage();
}
?>
