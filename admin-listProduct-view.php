<?php

include 'adminPanel-view.php';
?>
       

   <table class="datatable"> 
   <th>id</th>
<th>نام کالا</th>
<th>قیمت (تومان)</th>
<th>تعداد</th>
<th>  عرض</th>
<th>ارتفاع </th>
<th>ظرفیت</th>
<th>رنگ</th>

<th>تصویر بندانگشتی</th>
<th></th>
<th></th>
<?php
foreach($productList as $product)
{
   
    echo "
<tr>
<td>{$product['id']}</td>
<td>{$product['p_name']}</td>
<td>{$product['price']}</td>
<td>{$product['p_count']}</td>
<td>{$product['p_width']}</td>
<td>{$product['p_height']}</td>
<td>{$product['p_valency']}</td>
<td>{$product['color']}</td>

<td><img src='{$product['p_image']}'class='img-tumbnail'></td>
<td><a href ='editProduct-controler.php?id={$product['id']}'class='btn btn-outlined-button '>ویرایش</a></td>
<td><a href ='admin-deleteProduct-controler.php?id={$product['id']}'class='btn btn-outlined-button'>حذف</a></td>
</tr>
  
   ";
}

   ?>  
      </table>
      <br>
        
        <a href="addProduct-view.php" class="btn btn-filled primary ">افزودن محصول
        <i class="fas fa-plus-circle"></i>
        </a>

<br>
</section>
    </body>
</html>
