<?php
include 'db.php';
$db = new db('localhost','root','','shop_first');
if (isset($_GET["id"])) {
   $db->query('DELETE FROM product WHERE id=?',$_GET["id"]);
}
header("Location:http://localhost//c12.2.0/admin/listProducs/listProducs.php");
?>
