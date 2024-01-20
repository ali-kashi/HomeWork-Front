<?php
$name=$_POST["name"];
$email=$_POST["email"];
$Phone=$_POST["Phone"];
$titr=$_POST["titr"];
$description=$_POST["description"];
$con=new mysqli("localhost","root","","front");
$sql="insert into contact()values(\"$name\",\"$email\",\"$Phone\",\"$titr\",\"$description\")";
$con->query($sql);
$con->close();
?>