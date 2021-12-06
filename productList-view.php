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
       include 'templates/productCard.php';
    }
  
  ?>
      </div>
       
    </body>
</html>