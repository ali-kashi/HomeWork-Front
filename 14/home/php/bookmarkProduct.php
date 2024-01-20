<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
@$uid=your_session::read();
if (isset($uid))
{
  if (isset($_GET['pid']) && isset($uid)) {
    $likes=$db->query('SELECT * FROM bookmarkProduct WHERE uid=? && pid=? && state=? ',$uid,$_GET['pid'],"action")->fetchArray();
    if (isset($likes['uid'])) {
      $db->query('UPDATE bookmarkProduct SET state=? WHERE uid=? && pid=?',"noaction",$uid,$_GET['pid']);
      echo "remove-bookmark-p";
    }
    else {
      $likes=$db->query('SELECT * FROM bookmarkProduct WHERE uid=? && pid=? && state=? ',$uid,$_GET['pid'],"noaction")->fetchArray();
      if (isset($likes['uid'])) {
        $db->query('UPDATE bookmarkProduct SET state=? WHERE uid=? && pid=?',"action",$uid,$_GET['pid']);
      }
      else {
        $db->query('INSERT INTO bookmarkProduct(pid , uid , state) VALUES (?,?,?)',$_GET['pid'],$uid,'action');
      }
      echo "add-bookmark-p";
    }
  }
}
else {
  echo "not-login";
}
$db->close();
?>
