<?php
/*
$uid=Authentication :: uid();
$pid=$product['id'];

$sql="SELECT * FROM likeproduct WHERE uid=? AND pid=?";
$result=$db->query($sql,$uid,$pid);
$likeicon=$result ->fetchArray();

//سلکت کن از جدول لایک محصول آن  ردیفی راکه کاربر با شناسه فلان ان  محصول را  لایک کرده 
*/

echo "
<article class='card filled-card' >

   
<img src='{$product['p_image']}' class='card-img-top'>

<div class='card-body' >
<h5 class='card-title'>{$product['p_name']} </h5>
<p class='card-text'>{$product['body_text']}</p>
<h3 class='product-card-price'>{$product['price']} </h3>
<a href='productDetail-controler.php?id={$product['id']}'  class='btn btn-text-button ' >اطلاعات بیشتر</a>
<div class='card-buttom'>

<a href='basketProduct-controler.php?id={$product['id']} ' class='btn card-btn btn-outlined-button'>
<i class='fas fa-shopping-cart'></i>
افزودن به سبد خرید

</a>
<br>

<a href='likeProduct-controler.php?id={$product['id']}' title='ابتدا باید لاگین کنید'class='icon-btn'>
";
//اگر ردیفی وجود داشت آیکن لایک را به شکل تو پر نشان بده
/*
if(isset($likeicon['id'])){//قبلا لایک کرده
echo "<i class='   fas  fa-heart  like '></i>";
}
else{//درغیراین صورت  به شکل تو خالی نشان بده 
    */
    echo "<i class='   far  fa-heart   '></i>";
   
//}
echo"
</a>



<a href='bookmarkProduct-controler.php?id={$product['id']} 'class='icon-btn'>

<i class='far fa-bookmark  '></i>
</a>



</div>
</div>
</article>	
";

?>
