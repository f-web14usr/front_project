<?php
include 'adminPanel-view.php';


?>
  
        <form action=""method="post"enctype="multipart/form-data">
            
        
            
         <label for="p_name">نام محصول :</label>  
         <input type="text"name="p_name"id="p_name"class="text text-fulname">
         
         <br>
         <label for="p_date">قیمت:</label>  
         <input type="text"name="price"id="price"class="text text-fulname">
         <label for="p_count" class="short-text-label">تعداد :</label>
         <input type="number"name="p_count"id="p_count"class="text short-text">
         <label for="p_image">تصویر محصول:</label>  
         <input type="text"name="p_image"id="p_image"class="text text-fulname">
      
         <br>
             
          <label for="p_width"class="short-text-label">عرض :</label>
         <input type="text"name="p_width"id="p_width"class="text short-text"placeholder="mm">
       
         <label for="p_height">ارتفاع :</label>
         <input type="text"name="p_height"id="p_height"class="text short-text"placeholder="mm">
         <br>
          <label for="p_valency"class="short-text-label">ظرفیت :</label>
         <input type="text"name="p_valency"id="p_valency"class="text short-text"placeholder="kg">
         
         <label for="p_deep">عمق :</label>
         <input type="text"name="p_deep"id="p_deep"class="text short-text"placeholder="mm">
         <br> <br>


<label >رنگ محصول :</label>

           
         <label for="white-product"> سفید :</label>
         <input type="radio"name="color"value="white"id="white-product"class="radio-button"checked>
         
         <label for="black-product">مشکی :</label>
         <input type="radio"name="color"value="black"id="black-product"class="radio-button">
        
         <label for="silver-product">نقره ای :</label>
         <input type="radio"name="color"value="silver"id="silver-product"class="radio-button">
      <br><br>
     
      <label for="body-text">توضیحات :</label>
        
      <textarea name="body_text"id="body_text"class="text multi-text"></textarea>
<br>
<button id="add-product" type="submit" class=" btn btn-filled primary">افزودن محصول</button> 
        </form>
        </section>
    </body>
</html>


