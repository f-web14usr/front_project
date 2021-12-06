<?php
include 'settings.php';
include 'db.php';


$db = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql="SELECT* FROM products ORDER BY price ASC  LIMIT 10";

$result = $db->query($sql);
$productList=$result ->fetchAll();

   
include 'home-view.php';

$db->close();
?>