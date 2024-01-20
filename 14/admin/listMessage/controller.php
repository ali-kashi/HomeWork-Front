<?php
$db = new db('localhost','root','','front');
$messages= $db->query('SELECT id,name, email, phone, title FROM message')->fetchAll();
?>
