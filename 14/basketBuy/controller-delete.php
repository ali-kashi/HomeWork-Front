<?php
include 'db.php';
include 'class.php';
@$uid=your_session::read();
if (isset($uid))
{
if (isset($_GET["id"])) {
  $db = new db('localhost','root','','shop_first');
   $db->query('UPDATE `productbasket` SET `state`=? WHERE pid=? && uid=? && state=?','noaction',$_GET['id'],$uid,'action');
   $db->query('DELETE FROM `orders` WHERE uid=?',$uid);
   echo "deleteRowBasketBuy";
   $db->close();
}
}
else {
  echo "nologin";
}
?>
