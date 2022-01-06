<?php
include 'adminPanel-view.php';
?>
   <table class="datatable"> 
   <th>شناسه کاربر</th>
<th>نام کاربر</th>
<th>شناسه محصول</th>
<th>متن پیام</th>
<th></th>
<?php
foreach($comentList as $coment)
{
    echo "
<tr>
<td>{$coment['user_id']}</td>
<td>{$coment['coment_name']}</td>
<td>{$coment['product_id']}</td>
<td>{$coment['coment_text']}</td>
<td><a href ='admin-deleteComentControler.php?id={$coment['id']}'class=' icon-btn'>
<i class='fas fa-trash    '></i>

</a></td>
</tr>
   
   ";
}
   ?>  
      </table>
      <br>
      
</section>
    </body>
</html>