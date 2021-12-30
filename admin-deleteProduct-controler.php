<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$uid=$_GET['id'];


$db = new db($dbHost, $dbUser, $dbPass, $dbName);



    $sql="DELETE  FROM products WHERE id=?";
    $result=$db->query($sql,$uid);
    echo 'محصول حذف شد';




    $db->close();


?>