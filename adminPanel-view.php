
<?php
include 'security.php';
session_start();
if(Authentication::check() && Authorization :: checkAdmin())
{
echo "
<!doctype html>
<html lang='fa'>
    <head>
        <title>  مدیریت سایت</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='css/style.css' type='text/css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.1.1/css/all.css' integrity='sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ' crossorigin='anonymous'>
    </head>
    <body class='panel-layout'>
   
    
    <aside>
       <nav id=''>
          
   <ol class='aside-nav'>
   <h4>مدیریت سایت</h4>
   <li><a href='home-controler.php'class='btn-text-button'><i class='fa fa-store'></i>نمای سایت</a></li>

   <li><a href=''class='btn-text-button'><i class='fas fa-home   '></i>داشبورد</a></li>
   <li><a href='admin-listProductControler.php'class='btn-text-button'><i class='fas fa-money-bill'></i>مدیریت محصولات</a></li>
   <hr>
   <li><a href='admin-listUserControler.php'class='btn-text-button'><i class='fas fa-users    '></i>کاربران</a></li>
   <li><a href=''class='btn-text-button'><i class='fas fa-clipboard-list   '></i>سفارشات</a></li>
   <li><a href='admin-listContactControler.php'class='btn-text-button'><i class='fas fa-envelope    '></i>پیام ها</a></li>
   <li><a href='admin-listComentControler.php'class='btn-text-button'><i class='fas fa-comment-alt    '></i>کامنت ها</a></li>

   <li><a href='logout.php'class='btn-text-button'><i class='fas fa-arrow-right    '></i> خروج از پنل</a></li>


   </ol>
       </nav>

</aside>
  
     <section id='panel-section'>


";
}
else{
echo 'دسترسی ندارید';
header("Location: home-controler.php");
}
?>
