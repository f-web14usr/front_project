<?php

$uid=Authentication:: uid();
$pid=$_SESSION['pid'];

$db = new db( $dbHost, $dbUser, $dbPass, $dbName ); 

if(isset($_POST['submit']) )
{
    $coment_text=$_POST['coment_text'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="INSERT INTO coments (user_id,coment_name,product_id,coment_text)VALUES (?,?,?,?)";
    
    $result=$db->query($sql,$uid,$name,$pid,$coment_text);
    echo"send";

    $sql="SELECT* FROM coments WHERE product_id =?";
   
    $result = $db->query($sql,$pid);
    $comentList=$result ->fetchAll();
    include 'templates/coment-temp.php';

}
else{
    $sql="SELECT* FROM coments WHERE product_id =?";
   
    $result = $db->query($sql,$pid);
    $comentList=$result ->fetchAll();
    
include 'templates/coment-temp.php';
}
?>