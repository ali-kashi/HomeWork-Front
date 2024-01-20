<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
$uid=your_session::read();
// if (isset($_GET["id"]) && !isset($_POST["submit"]))
// {
//   $id=$_GET["id"];
//   $users = $db->query('SELECT * FROM users WHERE id = ?',$id)->fetchArray();
//   $fullname=$product['fullname'];
//   $phone=$product['phone'];
//   $pass=$product['pass'];
//   include 'editProfile.php';
// }
if (isset($_POST["submit"]))
{
  $id=$uid;
  $fullname=$_POST['fullname'];
  $phone=$_POST['phone'];
  $pass=$_POST['pass'];
  $email=$_POST['email'];
  $db->query('UPDATE users set name=?,phone=?,password=?,email=? WHERE id=?',$fullname,$phone,$pass,$email,$id);
  header('location:../panelUser.php?editprofile=ok');
}
  $db->close();
?>
