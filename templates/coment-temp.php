<?php
foreach($comentList as $coment)
{
echo"

<div class='coment-container'>
<h4>{$coment['coment_name']}</h4>
<p>{$coment['coment_text']}<p>
<br>
</div>
";
}
?>
<?php
if(! Authentication :: check())
{
  echo  "   برای ارسال دیدگاه ابتدا باید لاگین کنید 
  
  <a href='loginControler.php'>ورود به سایت </a>
  ";
  
}
else{
echo "
  <form  action='' method='post' >
  <h1> ثبت نظر جدید  </h1>

 <label for='fname'>نام :</label> 
 <br>
 <input type='text' name='name'class='text text-fulname' >
 <br>
<label for='email'>ایمیل :</label>
<br>
<input type='email' name='email'class='text'placeholder='example@gmail.com'required title='این فیلد ضروری است'>

<br>


<label for='body-text'>پیام شما :</label>
<br>      
<textarea name='coment_text'class='text multi-text'></textarea>


<br>
  <button  class=' btn btn-filled primary btn-short'name='submit'id='coment_btn'> ارسال</button>
  


</form>

" ;
}
?>