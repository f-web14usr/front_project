<?php

include 'settings.php';
include 'db.php';
$db = new db($dbHost, $dbUser, $dbPass, $dbName);



$sql="INSERT INTO users (fname,lname,phone,email,password) VALUES(?,?,?,?,?)";
$result=$db-> query($sql,$_POST['fname'],$_POST['lname'],$_POST['phone'],$_POST['email'],$_POST['password']);

echo "ثبت نام شما با موفیت انجام شد";
$db ->close();

?>