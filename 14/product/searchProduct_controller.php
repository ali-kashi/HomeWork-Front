<?php
include 'db.php';
include 'dbname.php';
$searchQuery = $_GET['q'];
$products = $db->query("SELECT * FROM product WHERE name LIKE '%{$searchQuery}%' LIMIT 10")->fetchAll();
if(isset($products[0]))
{
			include '../home/php/card.php';
}
?>
