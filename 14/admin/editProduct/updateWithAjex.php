<?php
include 'class.php';
include 'db.php';
include 'dbname.php';
@$uid=your_session::read();
$qr='SELECT * FROM `users` WHERE `id`=?';
$user = $db->query($qr,$uid)->fetchArray();
if (isset($user["id"]) && $user["role"]=="admin")
{
$id=$_POST["id"];
$name=$_POST['NameProduct'];
$price=$_POST['price'];
$Property=$_POST['Property'];
$filename = $_FILES["Picture"]["name"];
$tempname = $_FILES["Picture"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);
if($db->query('UPDATE product set name=?,price=?,Property=?,url=? WHERE id=?',$name,$price,$Property,$filename,$id))
{
echo "ok";
}
else {
  echo "error";
}
}
else
{
  header('location:../../index.php');
}
?>
