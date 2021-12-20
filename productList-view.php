<?php
include 'header.php';
?>
       
  
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