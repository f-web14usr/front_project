<?php
include 'settings.php';
include 'db.php';
$id = $_GET['id'];

$db = new db($dbHost, $dbUser, $dbPass, $dbName);

if(isset($_POST['submit']))
{
    $product_name=$_POST['p_name'];
    $product_price=$_POST['price'];
   $product_count=$_POST['p_count'];
   $product_width=$_POST['p_width'];
  $product_height=$_POST['p_height'];
 $product_valency=$_POST['p_valency'];
    $product_deep=$_POST['p_deep'];
   $product_color=$_POST['color'];
  $product_detail=$_POST['body_text'];
    $sql="UPDATE products
    SET p_name=?,price=?,p_count=?,p_width=?,p_height=?,p_valency=?,p_deep=?,color=?,body_text=?
    WHERE id=?";
$result=$db->query($sql,$product_name,$product_price,$product_count,$product_width,$product_height,
$product_valency,$product_deep,$product_color,$product_detail,$id);

echo "محصول با موفقیت ویرایش شد";
}
else{

$sql="SELECT* FROM products WHERE id=? ";

$result = $db->query($sql,$id);

$product=$result ->fetchArray();

   $product_name=$product['p_name'];
   $product_price=$product['price'];
  $product_count=$product['p_count'];
  $product_image=$product['p_image'];
  $product_width=$product['p_width'];
 $product_height=$product['p_height'];
$product_valency=$product['p_valency'];
   $product_deep=$product['p_deep'];
  $product_color=$product['color'];
 $product_detail=$product['body_text'];

include 'editProduct.php';
}


$db->close();
?>