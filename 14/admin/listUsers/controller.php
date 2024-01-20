<?php
$db = new db('localhost','root','','shop_first');
$users = $db->query('SELECT id,name, email, phone FROM users')->fetchAll();
?>
