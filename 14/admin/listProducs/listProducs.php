<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست محصولات</title>
    <!--فونت آیکون-->
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
   include '../panalAdmin/php/contoroller.php';
   $select="listProducs";
   include '../panalAdmin/php/panel.php';
   ?>
   <div class="main-content">
     <div class="container">
    <table class="data-table" >
        <tr>
          <th>نام</th>
          <th>قیمت</th>
          <th>ویرایش</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
		foreach ($products as $product)
		{
        $id=$product['id'];
        $name=$product['name'];
        $price=$product['price'];
		echo "
		<tr>
		<td>$name</td>
		<td class='data-table__number-left'>$price</td>
		<td><a href='../editProduct/editProduct.php?id={$id}'><i class='fas fa-pencil-alt'></i></a></td>
		<td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
		</tr>
		"		;
        }
		?>
    </table>
    </div>
  </div>
  <script src="http://localhost:8080//c12.2.0/admin/panalAdmin/js/component.js"></script>
	<script src="http://localhost:8080//c12.2.0/admin/panalAdmin/js/menu-Responsive.js"></script>
	  <script src="ajexdelete.js"></script>
  </body>
</html>
