<?php
include 'header.php';
echo"

<div class='product-container' >
<header>
<h2>{$productInfo['p_name']} </h2>
<br>
<p>{$productInfo['body_text']}</p>

<h3>{$productInfo['price']} </h3>

<a href='basketProduct-controler.php?id={$productInfo['id']} ' class='btn  btn-outlined-button' id='p-detail-button'>
<i class='fas fa-shopping-cart'></i>
افزودن به سبد خرید

</a>
</header>

<aside>

<img src='{$productInfo['p_image']}' alt='برای این کالا  تصویری موجود نیست'>

</aside>
<article >

<div>
<h6> ظرفیت :</h6>
<p class='p-content'> {$productInfo['p_valency']}kg </p>
</div>

<div>
<h6 > رنگ :</h6>
";
if( $productInfo['color']=="silver")
echo"<p class='p-content'>نقره ای </p>";
else if( $productInfo['color']=="black")
echo"<p class='p-content'> مشکی </p>";
else if( $productInfo['color']=="white")
echo"<p class='p-content'>سفید  </p>";
echo"
</div>

<div>
<h6 > عرض :</h6>
<p class='p-content'> {$productInfo['p_width']}mm </p>
</div>

<div>
<h6 > ارتفاع :</h6>
<p class='p-content'> {$productInfo['p_height']}mm </p>
</div>
<div>
<h6 > عمق :</h6>
<p class='p-content'> {$productInfo['p_deep']}mm </p>
</div>

</article>

<footer>";

include 'comentProduct-controler.php';
echo"

</footer>
</div>

";
?>
 <script  src="js/components.js" > </script>
