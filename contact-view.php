<?php
include 'adminPanel-view.php';
?>



 <h1 style=" margin-right: 24px;">تماس باما</h1>
 <table> 
    <form  action="contactControler.php" method="post" >
      <tr>
        <td>
<lable for="name" >نام ونام خانوادگی:</lable>

</td>
<td>
<input type="text"id="fulname" name="fulname"class="text text-fulname" >
<label for="email">ایمیل :</label>
<input type="email" id="mail" name="email"class="text  "placeholder="example@gmail.com" >
</td>

</tr>
<tr>
  <td>

</td>
<td>

</td>

</tr>
<tr>
  <td>
<label for="title" >عنوان :</label>
</td>
<td>
<input type="text"id="title" name="title"class="text text-fulname" >
</td>

</tr>
<tr>
  <td>
<label for="bigtext"class="multi-text-label">متن پیام :</label>
</td>
<td>
<textarea id="text" name="bigtext"class="text multi-text" id="bigtext"></textarea>
</td>
<br><br>
</tr>
<tr>
  <td></td>
  <td><button type="submit"id="submit"class=" btn btn-filled primary short">ارسال</button></td>

</tr>
</form>


</table>
</section>
</body>
</html>