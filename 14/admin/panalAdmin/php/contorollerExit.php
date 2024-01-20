<?php
include 'class.php';
if($_GET['action']=="exit")
{
your_session::close();
header('location:http://localhost:8080//c12.2.0/index.php');
}
?>
