

<!DOCTYPE html>
<html lang="fa">
    <head>
  
     <title> ویرایش پروفایل</title>
         
     <meta charset="utf-8">

     <link rel="stylesheet"type="text/css"href="css/profile-style.css">

</head>

<body>
 
  <form  action="" method="post" >
  <h1>پروفایل شما  </h1>

 <label for="fname">نام :</label> <label for="lname"class="line-label">نام خانوادگی :</label>
 <br>
 <input type="text"id="fname" name="fname"class="text text-fulname" value="<?php echo $firstname ?>">
 <input type="text" id="lname" name="lname"class="text text-fulname" value="<?php echo $lastname ?>">

<br>
<label for="phone" >شماره همراه :</label> 
<br>
<input type="tel"id="phone" name="phone"class="text"placeholder="09" value="<?php echo $phone ?>">
<br>
<label for="email">ایمیل :</label>
<br>
<input type="email"id="email" name="email"class="text"placeholder="example@gmail.com" value="<?php echo $email ?>">
<br>
<label for="password">رمز ورود  :</label>
<br>

<input type="password"id="password"name="password"class="text" value="<?php echo $password ?>">

<br>
  <button id="edit" class=" btn btn-filled primary btn-short"name="submit"> ویرایش</button>
  


</form>

</body>
</html>