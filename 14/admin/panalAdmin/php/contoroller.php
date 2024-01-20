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
  $user = $db->query('SELECT * FROM users where id=? && role=?',$uid,'admin')->fetchArray();
  if(isset($user))
  {
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
