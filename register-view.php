<?php
include 'adminPanel-view.php';
?>
  <form  action="register-controler.php" method="post" >
    <h1>ثبت نام درسایت   </h1>

 <label for="fname">نام :</label> <label for="lname"class="last-name">نام خانوادگی :</label>
 <br>
<input type="text"id="fname" name="fname"class="text text-fulname" >

<input type="text" id="lname" name="lname"class="text text-fulname">
<br>
<label for="phone" >شماره همراه :</label>
<br>
<input type="text"id="phone" name="phone"class="text"placeholder="09">
<br>
<label for="email" >ایمیل :</label>
<br>
<input type="email"id="email" name="email"class="text"placeholder="example@gmail.com">
<br>
<label for="password">رمز ورود  :</label>
<br>
<input type="password"id="password"name="password"class="text">
<br>
  <button id="submit" class="btn btn-filled success"> ایجاد حساب کاربری</button>
  


</form>
</section>
</body>
</html>