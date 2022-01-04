<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';
$uid=Authentication :: uid();
$productid=$_GET['id'];


$db = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql="SELECT * FROM productbasket WHERE uid=? AND pid=?";
$result=$db->query($sql,$uid,$pid);
$basket=$result ->fetchArray();
if(! isset($basket['id'])){

    $sql="INSERT INTO productbasket (uid,pid,quantity) VALUES (?,?,'1')";
    $result=$db->query($sql,$uid,$productid);
    
  echo "basket";

}
else{
echo "disbasket";
exit;

}

    $db->close();


?>