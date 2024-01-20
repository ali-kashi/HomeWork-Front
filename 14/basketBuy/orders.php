<?php
include 'db.php';
include 'class.php';
include 'dbname.php';
$uid=your_session::read();
$address=$_POST['address'];
$plaque=$_POST['plaque'];
$unit=$_POST['unit'];
$postalCode=$_POST['postalCode'];
$name=$_POST['name'];
$family=$_POST['family'];
$contactNumber=$_POST['contactNumber'];
$data=$_POST['data'];
$pidList=$_POST['pidList'];

$state=2;//در حال پردازش
// لیست سبد خرید
$basketlist = $db->query('SELECT * FROM productbasket where uid=? && state=?',$uid,'action')->fetchAll();
// تعداد خواسته شده از هر کالا
$pValueList="";
foreach ($basketlist as $basketItem) {
  $pValueList = $pValueList . $basketItem['value'] . "&&";
}
$db->query('INSERT INTO `orders`(`uid`, `pid`, `pValue` ,  `address`, `plaque`, `unit`, `postalCode`, `name`, `family`, `contactNumber`, `data`, `state`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?) ',$uid,$pidList,$pValueList,$address,$plaque,$unit,$postalCode,$name,$family,$contactNumber,$data,$state);
$db->close();
echo "addInformation";
 ?>
