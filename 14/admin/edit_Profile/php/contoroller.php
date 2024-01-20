<?php
include 'class.php';
include 'db.php';
include 'dbname.php';
@$uid=your_session::read();
if(!isset($uid))
{
header('location:../../index.php');
}
else {
$uid=$_GET['id'];
  $user = $db->query('SELECT * FROM users where id=?',$uid)->fetchArray();
  if(isset($user))
  {
	  $id=$uid;
  $fullname=$user['name'];
  $email=$user['email'];
  $phone=$user['phone'];
  $pass=$user['password'];
  }
  else {
    header('location:../../index.php');
  }
}

?>
