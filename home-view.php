     <?php
     include 'header.php';
     ?>
       
        <!-- Slider main container  -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
  
    <div class="swiper-slide "><img src="images/banners/banner1.png" alt="تصویر موجود نیست"></div>
    <div class="swiper-slide"><img src="images/banners/banner2.png" alt="تصویر موجود نیست"></div>
    <div class="swiper-slide"><img src="images/banners/banner3.png" alt="تصویر موجود نیست"></div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  
</div>
        <h2>ارزان ترین محصولات</h2>
       

        <!-- Slider main container  -->
        <div class="swiper card-group">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    
    
  <?php
        echo"<div class='swiper-slide grid-container'>";
    foreach( $productList as $product ){
     
       include 'templates/productCard.php';
       
    }
    echo"</div>";
  ?>
     
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  
</div>

  

<a href="#top" class="btn btn-filled  " id="go_top">
<i class="fas fa-angle-up    "></i>

</a>
      
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
       <script src="js/main.js"></script>
       <script src="js/components.js"></script>
    </body>
</html>