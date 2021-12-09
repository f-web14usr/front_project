<!doctype html>
<html lang="fa">
    <head>
        <title>  نوین|لیست کاربران</title>
        <meta charset="utf-8 ">
        <link rel="stylesheet " href="css/style.css" type="text/css ">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    </head>
    <body>
        <style>
         
        </style>
       
   <table class="datatable"> 
   <th>id</th>
<th class="td">نام</th>
<th>نام خانوادگی</th>
<th>شماره تلفن</th>
<th>ایمیل</th>
<th>رمز عبور</th>
<th></th>
<th></th>
<?php
foreach($userList as $user)
{
    echo "
<tr>
<td >{$user['id']}</td>
<td>{$user['fname' ]}</td>
<td>{$user['lname']}</td>
<td>{$user['phone']}</td>
<td>{$user['email']}</td>
<td>{$user['password']}</td>
<td><a href ='admin-editUserControler.php?id={$user['id']}'class='btn btn-outlined-button'>ویرایش</a></td>
<td><a href ='admin-deleteUserControler.php?id={$user['id']}'class='btn btn-outlined-button'>حذف</a></td>
</tr>
   
   ";
}
   ?>  
      </table>
      <br>
      <a href="register.html" class="btn btn-filled primary ">افزودن کاربر
        <i class="fas fa-plus-circle"></i>
        </a>
    </body>
</html>