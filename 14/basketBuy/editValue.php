<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
@$uid=your_session::read();
if(isset($_GET['basketProductValue']) && isset($uid))
{

	$db->query('UPDATE `productbasket` SET `value`=? WHERE pid=? && uid=? && state=? ',$_GET['basketProductValue'],$_GET['pid'],$uid,'action');
	$db->query('DELETE FROM `orders` WHERE uid=?',$uid);
	$db->close();
}
?>
