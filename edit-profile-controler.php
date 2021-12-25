<?php

include 'settings.php';
include 'db.php';
include 'security.php';

if(! Authentication :: check())
{
    echo 'لاگین نکردی';
    //header("Location: loginControler.php");
}
else if(Authentication :: check())
 {
    echo'لاگین کردی';
$id = $_GET['id'];

$db = new db( $dbHost, $dbUser, $dbPass, $dbName ); 

if(isset($_POST['submit']))
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$sql="UPDATE users
SET fname=?,lname=?,phone=?,email=?,password=?
WHERE id=?";

$result=$db->query($sql,$firstname,$lastname,$phone,$email,$password,$id);

echo "اطلاعات حساب شما باموفقیت ویرایش شد";

}

else{
$sql="SELECT* FROM users WHERE  id= ?";
$result = $db->query($sql,$id);

$profile=$result ->fetchArray();

$firstname=$profile['fname'];
$lastname=$profile['lname'];
$phone=$profile['phone'];
$email=$profile['email'];
$password=$profile['password'];


include 'edit-profile.php';
}
$db->close();
}
?>