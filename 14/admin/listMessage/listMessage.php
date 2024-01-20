<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>پیام ها</title>
    <link rel="stylesheet" href="style.css">
    <!--فونت آیکون-->
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
   include '../panalAdmin/php/contoroller.php';
   $select="listMessage";
   include '../panalAdmin/php/panel.php';
   ?>
    <div class="main-content">
    <table class="data-table" >
        <tr>
          <th>نام و نام خانوادگی</th>
          <th>ایمیل</th>
          <th>شماره تماس</th>
          <th>موضوع</th>
          <th>پاسخ</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($messages as $message)
		{
        $id=$message['id'];
        $name=$message['name'];
        $email=$message['email'];
        $phone=$message['phone'];
        $title=$message['title'];
		echo "
		<tr>
		<td>$name</td>
		<td>$email</td>
		<td class='data-table__number-left'>$phone</td>
    <td>$title</td>
		<td><a href='#'><i class='fas fa-reply'></i></a></td>
		<td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
  </div>
    <script src="ajexdelete.js"></script>
    <script src="http://localhost:8080//c12.2.0/admin/panalAdmin/js/component.js"></script>

  </body>
</html>
