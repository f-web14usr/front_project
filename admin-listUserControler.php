<?php
include 'settings.php';
include 'db.php';


$db = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql="SELECT* FROM users  LIMIT 10";

$result = $db ->query($sql);
$userList=$result ->fetchAll();

   
include 'admin-listUser-view.php';

$db->close();
?>