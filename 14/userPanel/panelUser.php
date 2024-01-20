<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>User Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../login/css/style.css">
    <!--فونت آیکون-->
	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <?php
      $select="editProfile";
      include 'php/panel.php';
      if(isset($_GET['editprofile']))
      {
          echo "<script>alert('ویرایش پروفایل با موفقیت انجام شد')</script>";
      }
       ?>
      <main class="main-content">
        <form action="php/contorollerEdit.php" method="post">
          <div class="containet">
             <div class="wrap">
               <a href="../index.php"><div class="name-store">فروش  کده</div></a>
               <div class="LabelLogin">ویرایش پروفایل</div>
         <div class="group">
           <input type="text" id="FullName" name="fullname" value="<?php echo $fullname; ?>" required>
           <label for="FullName">نام و نام خانوادگی</label>
         </div>
         <div class="group">
           <input type="number" id="Phone" name="phone" value="<?php echo $phone; ?>" required>
           <label for="Phone">شماره موبایل</label>
         </div>
         <div class="group">
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="این فیلد ضروری نیست">
            <label for="email">ایمیل</label>
          </div>
         <div class="group">
           <input type="password"  class='password' id="Pass" name="pass" value="<?php echo $pass; ?>" required>
           <label for="Pass">پسورد</label>
            <i class="icon fas fa-eye"></i>
         </div>
         <div class="group">
           <input type="password"  class='password' id="RePass" name="repass" value="<?php echo $pass; ?>" required>
           <label for="RePass">تکرار پسورد</label>
           <i class="icon fas fa-eye"></i>
         </div>
         <div class="group btn">
           <button type="submit" name="submit">ویرایش
             <i class="fas fa-arrow-alt-circle-left"></i>
           </button>
         </div>
       </div>
     </div>
  </form>
      </main>
      <script src="js/component.js"></script>
      <script src="js/validity.js"></script>
  </body>
</html>
