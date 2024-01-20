<?php
include 'db.php';
include 'dbname.php';
$FullName=$_POST["FullName"];
$Phone=$_POST["Phone"];
$Pass=$_POST["Pass"];
$email=@$_POST["email"];
if(isset($FullName) && isset($Phone) && isset($Pass))
{
$db->query('insert into users(`name`, `email`, `phone`, `password`, `role`) values(?,?,?,?,?)',$FullName,$email,$Phone,$Pass,'user');
 header('location:../../login/login.php');
}
$db->close();
?>
