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
$sql="SELECT * FROM productbookmark WHERE uid=? AND pid=?";
$result=$db->query($sql,$uid,$pid);
$bookmark=$result ->fetchArray();
if( isset($bookmark['id'])){

    $sql="DELETE  FROM productbookmark WHERE id=?";
    $result=$db->query($sql,$bookmark['id']);
   
    echo'unbookmark';
}
else{
    

    $sql="INSERT INTO productbookmark (uid,pid) VALUES (?,?)";
    $result=$db->query($sql,$uid,$pid);
    
    echo'bookmark';


}
}
    $db->close();


?>