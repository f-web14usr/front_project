<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$id=$_GET['id'];


$db = new db($dbHost, $dbUser, $dbPass, $dbName);



    $sql="DELETE  FROM  coments WHERE id=?";
    $result=$db->query($sql,$id);
  echo 'پیام حذف شد';




    $db->close();


?>