<?php
include 'db.php';
include 'dbname.php';
@$uid=your_session::read();
if (isset($uid))
{
$basketlist = $db->query('SELECT * FROM productbasket where uid=? && state=?',$uid,'action')->fetchAll();
$order = $db->query('SELECT * FROM orders where uid=?',$uid)->fetchArray();
}
else
{
	echo "<script>alert('لطفا به حساب خود وارد شوید')<script>";
	header('location:localhost/c12.2.0/index.php');
}

if (isset($_GET['factor']))
{
	$factor="none";
}
?>
