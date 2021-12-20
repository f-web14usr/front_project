<?php
include 'adminPanel-view.php';
?>
       
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
      <a href="register-view.php" class="btn btn-filled primary ">ثبت نام  کاربر
        <i class="fas fa-plus-circle"></i>
        </a>
</section>
</body>
</html>