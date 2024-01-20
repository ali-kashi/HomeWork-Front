<?php
include 'class.php';
include 'db.php';
include 'dbname.php';
@$uid=your_session::read();
if (isset($uid))
{

  if(isset($_GET["feedback"]) && isset($_GET["pid"]))
  {
  $feedback=$_GET["feedback"];
  $pid=$_GET["pid"];
  $db->query('INSERT INTO productFeedback(uid,pid,comment,state)VALUES (?,?,?,?)',$uid,$pid,$feedback,"action");
  $db->close();
  echo "feedbackInsert";
  }
  else {
    echo "noValid";
  }
}
else {
  echo "noLogin";
}
?>
