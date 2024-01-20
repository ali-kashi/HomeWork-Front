<?php
include 'db.php';
include 'dbname.php';
// تایید کردن دیدگاه ها
if (isset($_GET["id"])) {
   $db->query('UPDATE `productfeedback` SET `state`=? WHERE id=?',"valid",$_GET["id"]);
   echo "validComment";
}
else {
echo "novalid";
}
?>
