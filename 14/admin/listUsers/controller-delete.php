<?php
include 'db.php';
$db = new db('localhost','root','','shop_first');
if (isset($_GET["id"])) {
   $db->query('DELETE FROM users WHERE id=?',$_GET["id"]);
}
header("location:http://localhost//c12.2.0/admin/listUsers/listUsers.php")
?>
