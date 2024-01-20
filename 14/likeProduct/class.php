<?php
session_start();
class your_session
{

  static function set($uid)
  {
    $_SESSION["uid"]=$uid;
  }
  static function read()
  {
    return $_SESSION["uid"];
  }
}

?>
