<?php
  $qr='SELECT * FROM `users` WHERE `id`=?';
  $user = $db->query($qr,$uid)->fetchArray();
  if (isset($user["id"]) && $user["role"]=="admin")
  {
    if (isset($_GET["id"]))
    {
      $id=$_GET["id"];
      $product = $db->query('SELECT * FROM product WHERE id = ?',$id)->fetchArray();
      $name=$product['name'];
      $price=$product['price'];
      $Property=$product['property'];
      $url=$product['url'];
    }
  }
  else
  {
    header('location:../../index.php');
  }
?>
