 
    <?php
    session_start();
include 'settings.php';
include 'db.php';
include 'security.php';
$uid=Authentication :: uid();
//  1-  اتصال به پایگاه داده

$db = new db($dbHost, $dbUser, $dbPass, $dbName);

//اگر دکمه ثبت تغیرات وجود داشت 
if(isset($_POST['submit']))
{
$count=$basket['quantity'];
$pid=$_GET['id'];
//تعداد محصول سفارشی از جدول سبدخرید را ویرایش کن
$sql="UPDATE productbookmark
SET  quantity=?
WHERE pid=?";
$result=$db->query($sql,$count,$pid);

echo "سبد شما با موفقیت ویرایش شد";


}
else{

//   سلکت محصولاتی که به جدول سبدخرید اضافه شده اند

$sql="SELECT * FROM productbookmark WHERE uid=? ";
$result=$db->query($sql,$uid);

$basketList=$result ->fetchAll();

//   4-نمایش در جدول دیتاتیبل 
include 'bookmarkListTable-view .php';
}
$db->close();
?>

 