<?php



$link=new mysqli('localhost','root','','novin');
$link->set_charset("utf8");
if($link->connect_errno){
    echo "مشکلی در اتصال به پایگاه داده به وجود آمده".$link->connect_error;
    exit();
}


$sql="INSERT INTO users (fname,lname,phone,email,password) VALUES('{$_POST['fname']}','{$_POST['lname']}',
'{$_POST['phone']}','{$_POST['email']}','{$_POST['password']}')";
if($result=$link-> query($sql))
{
echo "ثبت نام شما با موفیت انجام شد";
$link ->close();
}
?>