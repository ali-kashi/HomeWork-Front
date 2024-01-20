<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>اضافه کردن محصول</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../panalAdmin/css/style.css">
    <!--فونت آیکون-->
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
   if(isset($_GET['add']))
   {
     echo "<script>alert('محصول با موفقیت اضافه شد')</script>";
   }
   include '../panalAdmin/php/contoroller.php';
   $select="addProduct";
   include '../panalAdmin/php/panel.php';
   ?>
   <div class="main-content">
    <form action="controller.php" method="post" enctype="multipart/form-data">
      <div class="containet">
        <div class="wrap">
			        <div class="LabelForm">اضافه محصول</div>
          <div class="group">
            <textarea  id="NameProduct" name="NameProduct"  required></textarea>
            <label for="NameProduct">نام محصول</label>
          </div>
          <div class="group">
            <input type="number" id="Prise" name="Prise" required>
            <label for="Prise">قیمت محصول</label>
          </div>
          <div class="group">
            <textarea name="Description" id="Description" rows="2"  required></textarea>
            <label for="Description">توضیحات</label>
          </div>
          <div class="group">
            <input type="file" id="Picture" name="Picture" required>
          </div>
          <div class="group btn">
            <button type="submit">اضافه کردن
              <i class="fas fa-arrow-alt-circle-left"></i>
            </button>
          </div>
        </div>
      </div>
   </form>
 </div>
 <script src="http://localhost:8080//c12.2.0/admin/panalAdmin/js/component.js"></script>
  </body>
</html>
