<?php
include 'dbname.php';
$feedbackList= $db->query('SELECT * FROM productfeedback order by id desc')->fetchAll();
?>
