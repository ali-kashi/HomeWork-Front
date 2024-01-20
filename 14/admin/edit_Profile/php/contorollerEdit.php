<?php
include 'db.php';
include 'dbname.php';
if (isset($_POST["submit"]))
{
  $id=$_POST['id'];
  $fullname=$_POST['fullname'];
  $phone=$_POST['phone'];
  $pass=$_POST['pass'];
  $email=$_POST['email'];
  $db->query('UPDATE users set name=?,phone=?,password=?,email=? WHERE id=?',$fullname,$phone,$pass,$email,$id);
  header('location:../edit_Profile.php?editprofile=ok&id='.$id);
}
  $db->close();
?>
