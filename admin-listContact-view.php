<?php
include 'header.php';
?>
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
<td><a href =''class='btn btn-outlined-button'>پاسخ</a></td>
<td><a href =''class='btn btn-outlined-button'>حذف</a></td>
</tr>
   
   ";
}
   ?>  
      </table>
      <br>
      <a href="contact-view.php" class="btn btn-filled primary ">افزودن پیام
        <i class="fas fa-plus-circle"></i>
        </a>
</section>
    </body>
</html>