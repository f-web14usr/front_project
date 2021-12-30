<?php
echo "
<article class='card filled-card' >

   
<img src='{$product['p_image']}' class='card-img-top'>

<div class='card-body' >
<h5 class='card-title'>{$product['p_name']} </h5>
<p class='card-text'>{$product['body_text']}</p>
<h3 class='product-card-price'>{$product['price']} </h3>
<a href='productDetails_controller.php?id={$product['id']}'  class='btn card-btn primary link ' >اطلاعات بیشتر</a>
<div class='card-buttom'>
<a href='likeProduct-controler.php?id={$product['id']}' title='ابتدا باید لاگین کنید'>
<i class='   far  fa-heart icon-btn  '></i>
</a>
<a href='basketProduct-controler.php?id={$product['id']} '>

<i class='fas fa-shopping-cart  icon-btn   '></i>
</a>
<a href='bookmarkProduct-controler.php?id={$product['id']} '>

<i class='far fa-bookmark  icon-btn'></i>
</a>



</div>
</div>
</article>	
";

?>
