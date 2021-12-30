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
$sql="SELECT * FROM likeproduct WHERE uid=? AND pid=?";
$result=$db->query($sql,$uid,$pid);
$like=$result ->fetchArray();
if(isset($like['id'])){

    $sql="DELETE  FROM likeproduct WHERE id=?";
    $result=$db->query($sql,$like['id']);
  

}
else{
$sql="INSERT INTO likeproduct (uid,pid) VALUES (?,?)";

$result=$db->query($sql,$uid,$pid);


}

    $db->close();

}
?>