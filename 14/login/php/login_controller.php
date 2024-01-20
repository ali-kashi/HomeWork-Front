<meta charset="utf-8">
<?php
include 'class.php';
include 'db.php';
include 'dbname.php';
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$user = $db->query('SELECT * FROM `users` WHERE `phone`=? && `password`=?',$phone,$pass)->fetchArray();
if(isset($user["id"]))
{
  your_session::set($user["id"]);
  header('location:../../index.php');
  close();
}
else {
    echo "نام کاربری یا رمز عبور شما صحیح نیست !";
    header('location:../login.php?noRight=1');
}
$db->close();
?>
