<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$pid=$_GET['id'];
$_SESSION['pid']=$pid;


$db = new db($dbHost, $dbUser, $dbPass, $dbName);


$sql="SELECT* FROM products  WHERE id=?";

$result = $db->query($sql,$pid);
$productInfo=$result ->fetchArray();


   

include 'productDetail-view.php';






$db->close();
?>