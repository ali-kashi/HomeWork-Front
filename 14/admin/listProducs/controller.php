<?php
$db = new db('localhost','root','','shop_first');
$products = $db->query('SELECT id,name, price FROM product')->fetchAll();
?>
