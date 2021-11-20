<?php

$link=new mysqli('localhost','root','','novin');
$link ->set_charset("utf8");

if($link-> connect_errno){
    echo "مشکلی در اتصال به پایگاه داده به وجود آمده".$link-> connect_error;
    exit();
}
$sql="INSERT INTO products (p_name,p_date,p_count,p_width,p_height,p_valency,p_deep,color,body_text)
VALUES ('{$_POST['p_name']}','{$_POST['p_date']}','{$_POST['p_count']}','{$_POST['p_width']}',
'{$_POST['p_height']}','{$_POST['p_valency']}','{$_POST['p_deep']}','{$_POST['color']}','{$_POST['body_text']}')";

if($result=$link->query($sql))
{
    echo"محصول با موفقیت افزوده شد";
    $link->close();
}





?>