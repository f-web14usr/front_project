<!doctype html>
<html lang="fa">
    <head>
        <title>  محصولات</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body class="grid-layout">
    
    <header>کاتالوگ محصولات</header>
    <aside>

   بخش کناری

</aside>
    <main>
     <nav>
 منو نویگیشن

     </nav>
     
    </main>




     <section>
   <div class="card-group"> 
  <?php
        
    foreach( $productList as $product ){
       include 'templates/productCard.php';
    }
    
  ?>
      </div>
      </section>

    

      <footer>
  فوتر
      </footer>
     
    </body>
</html>