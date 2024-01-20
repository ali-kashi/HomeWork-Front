<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>پرداخت نهایی</title>
    <link rel="stylesheet" href="css/finalPayment.css">
    <!--فونت آیکون-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  </head>
  <body>
<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
@$uid=your_session::read();
if(isset($uid))
{
  if(isset($_GET['oid']))
  {
    $id=$_GET['oid'];
    $db->query('UPDATE `orders` SET `state`=? WHERE id=?','1',$id);
    $db->close();
    echo "<div class='container-centerPage'>
    پرداخت با موفقیت انجام شد ؛ شماره سفارش شما {$id} است .</br>
    <div>پس از <div class='counter'></div> ثانیه شما به طور خودکار به صفحه ی اصلی منتقل می شوید.</div>
    </div>";
  }
}
 ?>
 <script src="js/changeLocation.js"></script>
</body>
</html>
