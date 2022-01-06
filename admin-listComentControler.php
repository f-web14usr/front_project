<?php
include 'settings.php';
include 'db.php';



$db = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql="SELECT* FROM coments  LIMIT 10";

$result = $db ->query($sql);
$comentList=$result ->fetchAll();

   
include 'admin-listComent-view.php';



$db->close();
?>