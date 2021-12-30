<?php
 include 'header.php';
 session_start();
if(isset($_POST['submit']))
{
   
include 'settings.php';
include 'db.php';
include 'security.php';



$db = new db($dbHost, $dbUser, $dbPass, $dbName);



$sql="SELECT * FROM users WHERE  email=?";
$result=$db->query($sql,$_POST['email']);

$userinfo=$result->fetchArray();

if(isset($userinfo['password'])&&$userinfo['password']== $_POST['password'])
{
$uid=$userinfo['id'];
$role=$userinfo['role'];
Authentication :: login($uid);
Authorization :: issAdmin($role);

}
if($role==0){
echo "واردشدید";
header("Location: user_panel.php");
}
else if($role==1){
    echo " ادمین واردشدید";
    header("Location:adminPanel-view.php ");
    }

else{
echo'کاربری با این مشخصات وجودندارد .';
}
}
else{

    include 'login-view.php';
}


?>