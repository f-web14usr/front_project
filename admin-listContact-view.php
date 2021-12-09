<!doctype html>
<html lang="fa">
    <head>
        <title>  نوین|لیست پیام ها</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    </head>
    <body>
   <table class="datatable"> 
   <th>id</th>
<th>نام کامل</th>
<th>ایمیل</th>
<th> عنوان پیام</th>
<th>متن پیام</th>
<th></th>
<th></th>
<?php
foreach($messageList as $message)
{
    echo "
<tr>
<td>{$message['id']}</td>
<td>{$message['fulname']}</td>
<td>{$message['email']}</td>
<td>{$message['title']}</td>
<td>{$message['bigtext']}</td>
<td><a href =''class='btn btn-outlined-button'>ویرایش</a></td>
<td><a href =''class='btn btn-outlined-button'>حذف</a></td>
</tr>
   
   ";
}
   ?>  
      </table>
      <br>
      <a href="contact.html" class="btn btn-filled primary ">افزودن پیام
        <i class="fas fa-plus-circle"></i>
        </a>
    </body>
</html>