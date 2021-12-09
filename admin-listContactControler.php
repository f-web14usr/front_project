<?php
include 'settings.php';
include 'db.php';


$db = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql="SELECT* FROM message  LIMIT 10";

$result = $db ->query($sql);
$messageList=$result ->fetchAll();

   
include 'admin-listContact-view.php';

$db->close();
?>