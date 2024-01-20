<?php
include 'class.php';
include 'db.php';
include 'dbname.php';
@$uid=your_session::read();
if(!isset($uid))
{
header('location:../index.php');
}
else {
  $user = $db->query('SELECT * FROM users where id=?',$uid)->fetchArray();
  $fullname=$user['name'];
  $email=$user['email'];
  $phone=$user['phone'];
  $pass=$user['password'];
}

?>
