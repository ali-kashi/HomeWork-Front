<!DOCTYPE html>
<html lang="la" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>ویرایش محصول</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../panalAdmin/css/style.css">
    <!--فونت آیکون-->
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
   include '../panalAdmin/php/contoroller.php';
   include '../panalAdmin/php/panel.php';
   include 'contoroller.php';
   ?>
   <div class="main-content">
    <form action="updateWithAjex.php" class="formGetInformation" method="post" enctype="multipart/form-data">
      <div class="containet">
         <div class="wrap">
           <div class="LabelForm">ویرایش محصول</div>
        <input type="hidden"  name="id" value="<?php echo $_GET["id"]; ?>" required>
          <div class="group">
            <textarea  id="NameProduct" name="NameProduct"  required><?php echo $name ; ?></textarea>
            <label for="NameProduct">نام محصول</label>
          </div>
          <div class="group">
            <input type="number" id="price" name="price" value="<?php echo $price; ?>" required>
            <label for="Prise">قیمت محصول</label>
          </div>
          <div class="group">
            <textarea name="Property" id="Property"  required><?php echo $Property ?></textarea>
            <label for="Property">توضیحات</label>
          </div>
          <div class="group">
            <input type="file" id="Picture" name="Picture"   required>
          </div>
          <div class="group btn">
            <button type="submit" name="submit">ویرایش
              <i class="fas fa-arrow-alt-circle-left"></i>
            </button>
          </div>
      </div>
      </div>
   </form>
   </div>
   <script src="ajax.js"></script>
  </body>
</html>
