<?php
echo "
<article class='slider-card filled-card'>

   
<img src='{$product['p_image']}' class='card-img-top'>

<div class='card-body' >
<h5 class='card-title'>{$product['p_name']} </h5>
<p class='card-text'>{$product['body_text']}</p>
<h3 class='product-card-price'>{$product['price']} </h3>
<a href='productDetails_controller.php?id={$product['id']}'  class='btn card-btn primary  '>اطلاعات بیشتر</a>

</div>
</article>	
";
?>