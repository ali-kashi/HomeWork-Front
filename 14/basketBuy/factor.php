<?php
// include 'db.php';
// include 'class.php';
 include 'dbname.php';
$uid=your_session::read();
$order=$db->query('SELECT * FROM `orders` where uid=? ORDER BY id Asc ',$uid)->fetchArray();
// جداکردن مقدار اصلی از کل رشته
if(isset($order['pid']))
{
$pidList=explode('&&', $order['pid']);
$pValueList=explode('&&', $order['pValue']);
//حذف یک رکورد اضافه از ارایه
$countPid=count($pidList);
for ($i=0;$i<$countPid;$i++) {
  if ($pidList[$i] == '') {
    unset($pidList[$i]);
  }
  if ($pValueList[$i] == '') {
    unset($pValueList[$i]);
  }
}
// محاسبه ی جمع قیمت کالاها
$Prices=0;
$countPid=count($pidList);
for ($i=0;$i<$countPid;$i++) {
  $product=$db->query('SELECT * FROM `product` where id=?',$pidList[$i])->fetchArray();
  $Prices += $product['price'] * $pValueList[$i];
}
//
//
// foreach ($pidList as $pid)
// {
//   $product=$db->query('SELECT * FROM `product` where id=?',$pid)->fetchArray();
//   $Prices += $product['price'];
// }
// محاسبه ی مالیات بر ارزش افزوده
$valueAdded=$Prices*.09;
//محاسبه جمع قیمت و لرزش افزوده
$totalPrice = $Prices + $valueAdded;
// محاسبه ی هزینه ی حمل
$transport=0;
if($totalPrice <= 300000)
{
  $countPid=count($pidList);
  $transport =10000 + ($countPid * 2);
}
else {
  $transportFree="هزینه ی ارسال سفارش های بالای 300 هزار تومان رایگان است ";
}
// محاسبه ی جمع کل
 $totalPrice =  $totalPrice + $transport;
}
$db->close();
 ?>
