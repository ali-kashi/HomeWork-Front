<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>لیست کاربران</title>
    <!--فونت آیکون-->
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../listProducs/style.css">
  </head>
  <body>
    <?php
   include '../panalAdmin/php/contoroller.php';
   $select="listUsers";
   include '../panalAdmin/php/panel.php';
   ?>
   <div class="main-content">
    <table class="data-table" >
        <tr>
          <th>نام و نام خانوادگی</th>
          <th>ایمیل</th>
          <th>شماره تماس</th>
          <th>افزودن</th>
          <th>ویرایش</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($users as $user)
		{
        $id=$user['id'];
        $name=$user['name'];
        $email=$user['email'];
        $phone=$user['phone'];
		echo "
		<tr>
		<td>$name</td>
		<td>$email</td>
		<td class='data-table__number-left'>$phone</td>
		<td><a href='http://localhost//c12.2.0/register/register.html'><i class='fas fa-plus-circle'></i></a></td>
		<td><a href='../edit_Profile/edit_Profile.php?id={$id}'><i class='fas fa-pencil-alt'></i></a></td>
		<td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
  </div>
    <script src="http://localhost//c12.2.0/admin/panalAdmin/js/component.js"></script>
  </body>
</html>
