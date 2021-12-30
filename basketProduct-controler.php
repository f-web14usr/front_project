<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';
$uid=Authentication :: uid();
$pid=$_GET['id'];


$db = new db($dbHost, $dbUser, $dbPass, $dbName);
if(! Authentication :: check())
{

    header("Location:loginControler.php");
    exit;
}
else{
$sql="SELECT * FROM productbasket WHERE uid=? AND pid=?";
$result=$db->query($sql,$uid,$pid);
$basket=$result ->fetchArray();
if(! isset($basket['id'])){

    $sql="INSERT INTO productbasket (uid,pid) VALUES (?,?)";
    $result=$db->query($sql,$uid,$pid);
    
  

}
else{
echo 'محصول قبلا به سبد خرید افزوده شده';

}
}
    $db->close();


?>