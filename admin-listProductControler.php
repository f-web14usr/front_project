<?php
include 'settings.php';
include 'db.php';



$db = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql="SELECT* FROM products  LIMIT 10";

$result = $db ->query($sql);
$productList=$result ->fetchAll();

   
include 'admin-listProduct-view.php';

$db->close();
?>