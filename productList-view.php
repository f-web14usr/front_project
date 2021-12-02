<!doctype html>
<html lang="fa">
    <head>
        <title>  محصولات</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
   <div class="card-group"> 
  <?php
        
    foreach( $productList as $product ){
        echo "
               
<div class='card filled-card'>

   
<img src='{$product['p_image']}' class='card-img-top'>

<div class='card-body' >
<h5 class='card-title'>{$product['p_name']} </h5>
<p class='card-text'>{$product['body_text']}</p>
<h3 class='product-card-price'>{$product['price']} </h3>
<a href='productDetails_controller.php?id={$product['id']}'  class='btn card-btn primary  '>اطلاعات بیشتر</a>

</div>
</div>			
        ";
    }
  
  ?>
      </div>
       
    </body>
</html>