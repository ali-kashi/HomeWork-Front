<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
@$uid=your_session::read();
if (isset($uid))
{
  if (isset($_GET['pid']) && isset($uid)) {
    $likes=$db->query('SELECT * FROM likeproduct WHERE uid=? && pid=? ',$uid,$_GET['pid'])->fetchArray();
    if (isset($likes['uid'])) {
      $db->query('DELETE from likeproduct where uid=? && pid=? ',$uid,$_GET['pid']);
      echo "remove-like-p";
    }
    else {
      $db->query('INSERT INTO `likeproduct`(`pid`, `uid`) VALUES (?,?)',$_GET['pid'],$uid);
      echo "add-like-p";
    }
  }
}
else {
  echo "not-login";
}
$db->close();
?>