<!DOCTYPE html>
<html lang="la" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>ویرایش محصول</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
        <input type="hidden"  name="id" value="<?php echo $_GET["id"]; ?>" required>
        <div class="head">ویرایش محصول</div>
        <div class="wrap">
          <div class="group">
            <input type="text" id="NameProduct" name="NameProduct" value="<?php echo $name ; ?>" required>
            <label for="NameProduct">نام محصول</label>
          </div>
          <div class="group">
            <input type="number" id="Prise" name="Prise" value="<?php echo $price; ?>" required>
            <label for="Prise">قیمت محصول</label>
          </div>
          <div class="group">
            <textarea name="Property" id="Property" rows="2"  required><?php echo $Property ?></textarea>
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
