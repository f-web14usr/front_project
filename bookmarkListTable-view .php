<?php

include 'header.php';
?>
       

   <table class="big datatable "> 
   <th>شناسه محصول</th>
   <th>تصویر کالا</th>
<th>نام کالا</th>
<th>قیمت (تومان)</th>
<th>تعداد</th>
<th>حذف</th>


<?php
foreach($basketList as $basket)
{
    //    3-سلکت اطلاعات آیدی محصولی که به سبد خرید اضافه شده از جدول محصولات
    $sql="SELECT* FROM products  WHERE id=?";

    $result = $db ->query($sql,$basket['pid']);
    $p_ditail=$result ->fetchArray();
    echo "
    <form  action='' >
    <tr>
    <td>{$p_ditail['id']}</td>
    <td><img src='{$p_ditail['p_image']}'class='img-tumbnail'></td>
    <td>{$p_ditail['p_name']}</td>
    <td>{$p_ditail['price']}</td>
    <td><input type='number'name='quantity'min='1' class='text short-text'value='1'></td>

    <td><a href ='deleteBookmark-controler.php?id={$p_ditail['id']}'class='icon-btn like'>  <i class='fas fa-trash    '></i></a></td>
    </tr>
      
       ";

}
  


   
echo" </table>
      <br>
       
       ";
      ?> 
        

<br>
</section>
    </body>
</html>
