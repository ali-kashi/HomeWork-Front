<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="css/style.css">
    <!--فونت آیکون-->
	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    </head>
  <body>
    <?php
    if(isset($_GET['noRight']))
    {
      echo "<script>alert('نام کابری یا رمز عبور اشتباه است !')</script>";
    }
    ?>
    <form action="php/login_controller.php" method="post">
      <div class="containet">
        <div class="wrap">
          <a href="../index.php"><div class="name-store">فروش  کده</div></a>
          <div class="LabelLogin">ورود</div>
          <div class="group">
            <input type="number" id="phone" name="phone" required>
            <label for="phone">شماره موبایل</label>
          </div>
          <div class="group">
            <input type="password"  class="password"  id="pass" name="pass" required>
            <label for="pass">پسورد</label>
            <i class="icon fas fa-eye"></i>
          </div>
          <div class="group btn">
            <button type="submit">ورود
              <i class="fas fa-arrow-alt-circle-left"></i>
            </button>
            <a href='../register/register.html' class="register">ثبت نام
              <i class="fas fa-arrow-alt-circle-left"></i>
            </a>
          </div>
        </div>
      </div>
   </form>
   <script type="text/javascript" src="js/component.js" ></script>
  </body>
</html>
