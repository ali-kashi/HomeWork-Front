<?php
$FullName=$_POST["FullName"];
$Phone=$_POST["Phone"];
$Pass=$_POST["Pass"];
$con=new mysqli("localhost","root","","front-project");
$sql="insert into register()values(\"$FullName\",\"$Phone\",\"$Pass\")";
$con->query($sql);
$con->close();
?>
