<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$pid=$_GET['id'];
$uid=Authentication :: uid();

$db = new db($dbHost, $dbUser, $dbPass, $dbName);



    $sql="DELETE  FROM productbookmark WHERE pid=? AND uid=?";
    $result=$db->query($sql,$pid,$uid);
    echo 'محصول حذف شد';




    $db->close();


?>