<?php
include 'db.php';
include 'dbname.php';
if (isset($_GET["id"])) {
   $db->query('DELETE FROM productfeedback WHERE id=?',$_GET["id"]);
   echo "delete";
}
else {
echo "novalid";
}
?>
