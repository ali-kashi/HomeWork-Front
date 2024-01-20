<?php
include 'db.php';
include 'dbname.php';
include 'class.php';
@$uid=your_session::read();
if (isset($uid))
{
  if (isset($_GET['pid']) && isset($uid)) {
    $likes=$db->query('SELECT * FROM productBasket WHERE uid=? && pid=? && state=? ',$uid,$_GET['pid'],"action")->fetchArray();
    if (isset($likes['uid'])) {
      $db->query('UPDATE productBasket SET value=? WHERE uid=? && pid=?',$likes['value']+1,$uid,$_GET['pid']);
      //echo "remove-basket-p";
    }
    else {
      //$likes=$db->query('SELECT * FROM bookmarkProduct WHERE uid=? && pid=? && state=? ',$uid,$_GET['pid'],"noaction")->fetchArray();
        $db->query('INSERT INTO productBasket(pid , uid , state ,value) VALUES (?,?,?,?)',$_GET['pid'],$uid,'action',1);
      }
      echo "add-basket-p";
	  $db->query('DELETE FROM `orders` WHERE uid=?',$uid);
    }
}
else {
  echo "not-login";
}
$db->close();
?>
