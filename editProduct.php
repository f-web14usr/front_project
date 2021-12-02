<!DOCTYPE html>
<html lang="fa">
    <head>
        <title> ویرایش محصول</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
  
        <form action=""method="post"enctype="multipart/form-data">
           
        
            
         <label for="p_name">نام محصول :</label>  
         <input type="text"name="p_name"id="p_name"class="text text-fulname"value="<?php  echo $product_name  ?>">
         
         <br>
         <label for="p_date">قیمت  :</label>  
         <input type="text"name="price"id="price"class="text text-fulname"value="<?php  echo $product_price  ?>">
         <label for="p_count" class="short-text-label">تعداد :</label>
         <input type="number"name="p_count"id="p_count"class="text short-text"value="<?php  echo $product_count ?>">
         <label for="p_image">تصویر محصول:</label>  
         <input type="text"name="image"id="image"class="text text-fulname"value="<?php  echo $product_image ?>">
      
         <br>
             
          <label for="p_width"class="short-text-label">عرض :</label>
         <input type="text"name="p_width"id="p_width"class="text short-text"placeholder="mm"value="<?php  echo $product_width  ?>">
       
         <label for="p_height">ارتفاع :</label>
         <input type="text"name="p_height"id="p_height"class="text short-text"placeholder="mm"value="<?php  echo $product_height  ?>">
         <br>
          <label for="p_valency"class="short-text-label">ظرفیت :</label>
         <input type="text"name="p_valency"id="p_valency"class="text short-text"placeholder="kg"value="<?php  echo $product_valency  ?>">
         
         <label for="p_deep">عمق :</label>
         <input type="text"name="p_deep"id="p_deep"class="text short-text"placeholder="mm"value="<?php  echo $product_deep  ?>">
         <br> <br>


<label >رنگ محصول :</label>

           
         <label for="white-product"> سفید :</label>
         <input type="radio"name="color"value="white"id="white-product"class="radio-button"checked <?php if($product_color=='white') echo 'checked' ; ?>>
         
         <label for="black-product">مشکی :</label>
         <input type="radio"name="color"value="black"id="black-product"class="radio-button" <?php  if($product_color=='black')  echo 'checked' ; ?>>
        
         <label for="silver-product">نقره ای :</label>
         <input type="radio"name="color"value="silver"id="silver-product"class="radio-button"<?php if($product_color=='silver')  echo 'checked';  ?>  >
      <br><br>
     <!--<label for="p_image"class="short btn success">افزودن تصویر:</label>  
       <input type="file"name="p_image"class="file"id="p_image">
       <br><br>-->
      <label for="body-text">توضیحات :</label>
        
      <textarea name="body_text"id="body_text"class="text multi-text"><?php  echo $product_detail  ?></textarea>
<br>
<button id="add-product" type="submit"name="submit" class="short btn btn-filled primary">ویرایش محصول</button> 
        </form>
        
    </body>
</html>