<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>دیدگاه ها</title>
    <!--فونت آیکون-->
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../listProducs/style.css">
  </head>
  <body>
    <?php
   include '../panalAdmin/php/contoroller.php';
   $select="listComment";
   include '../panalAdmin/php/panel.php';
   ?>
   <div class="main-content">
    <table class="data-table" >
        <tr>
          <th>آیدی کاربر</th>
          <th>آیدی محصول</th>
          <th>دیدگاه</th>
          <th>تایید</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($feedbackList as $feedback)
		{
        $id=$feedback['id'];
        $pid=$feedback['pid'];
        $uid=$feedback['uid'];
        $comment=$feedback['comment'];
        $state=$feedback['state'];
		echo "
		<tr>
		<td>{$uid}</td>
		<td><a href='../../productDetails/productDetails.php?pid={$pid}' title='برای مشاهده ی جزئیات کلیک کنید'>$pid</a></td>
    <td>$comment</td>
		<td><a href='validComment.php?id={$id}' class='validRecoard'>
    ";
    if($state === "valid")
    {
      echo "<i class='far fa-check-circle delete-icon_state_valid'>";
    }
    else
    {
      echo "<i class='far fa-check-circle'>";
    }
    echo "</i></a></td>
		<td><a href='controller-delete.php?id={$id}' class='deleteRecoard'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
    </div>
    <script src="js/deleteFeedback.js">
    </script>
    <script src="js/validComment.js"></script>
  </body>
</html>
