<?php

include 'settings.php';
include 'db.php';

$db = new db( $dbHost, $dbUser, $dbPass, $dbName ); 

if(isset($_POST['submit']))
{
    $userId=$_POST['userId'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$sql="UPDATE users
SET id=?,fname=?,lname=?,phone=?,email=?,password=?
WHERE id=?";

$result=$db->query($sql,$userId,$firstname,$lastname,$phone,$email,$password,$id);

echo "اطلاعات حساب شما باموفقیت ویرایش شد";

}

else{
$sql="SELECT* FROM users WHERE  id= ?";
$result = $db->query($sql,$id);

$profile=$result ->fetchArray();
$userId=$_GET['id'];
$firstname=$profile['fname'];
$lastname=$profile['lname'];
$phone=$profile['phone'];
$email=$profile['email'];
$password=$profile['password'];


include 'admin-editUser.php';
}
$db->close();
?>