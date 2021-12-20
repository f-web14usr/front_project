<?php

include 'settings.php';
include 'db.php';
$db = new db($dbHost, $dbUser, $dbPass, $dbName);

$sql="INSERT INTO products (p_name,price,p_count,p_image,p_width,p_height,p_valency,p_deep,color,body_text)
VALUES (?,?,?,?,?,?,?,?,?,?)";

$result=$db->query($sql,$_POST['p_name'],$_POST['price'],$_POST['p_count'],$_POST['p_image'],$_POST['p_width'],
$_POST['p_height'],$_POST['p_valency'],$_POST['p_deep'],$_POST['color'],$_POST['body_text']);

    echo"محصول با موفقیت افزوده شد";
    $db->close();


?>