<?php
include 'php/db.php';
include 'php/dbname.php';
$NameProduct=$_POST["NameProduct"];
$Prise=$_POST["Prise"];
$Description=$_POST["Description"];
$filename = $_FILES["Picture"]["name"];
$tempname = $_FILES["Picture"]["tmp_name"];
$folder = "../../home/image/".$filename;
move_uploaded_file($tempname, $folder);
$con=new mysqli("localhost","root","","front");
// $sql="insert into product values(\"$NameProduct\",\"$Prise\",\"$Description\",\"$filename\")";
$db->query('INSERT INTO `product`(`name`, `price`, `Property`,`url`) VALUES (?,?,?,?)',$NameProduct,$Prise,$Description,$filename);
$db->close();
header('location:addProduct.php?add=1');
?>
