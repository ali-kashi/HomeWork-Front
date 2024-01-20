<?php
include 'db.php';
include 'dbname.php';

if(isset($_GET["pid"]))
{
	$Product = $db->query('SELECT * FROM product where id=? ',$_GET["pid"])->fetchArray();
	$feedbacks = $db->query('SELECT * FROM productfeedback  where pid=? && state=?',$_GET["pid"],"valid")->fetchAll();
}
@$uid=your_session::read();
if (isset($uid))
{
	$bokmarkProduct = $db->query('SELECT pid FROM bookmarkproduct WHERE uid=? && state=? && pid=? ',$uid,"action",$_GET["pid"])->fetchArray();
	$likeproduct = $db->query('SELECT pid FROM likeproduct WHERE uid=? && pid=? ',$uid,$_GET["pid"])->fetchArray();
}
// else
// {
// 	echo "<script>alert('لطفا به حساب خود وارد شوید')<script>";
// 	header('location:localhost:8080/c12.1.0/index.php');
// }
// if(isset($_GET['basketProductValue']) && isset($uid))
// {
//
// 	$db = new db('localhost','root','','front');
// 	$db->query('UPDATE `productbasket` SET `value`=? WHERE pid=? && uid=? && state=? ',$_GET['basketProductValue'],$_GET['pid'],$uid,'action');
// 	$db->close();
// }
?>
