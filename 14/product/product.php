<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>محصولات</title>
    <link rel="stylesheet" href="css/style.css">
    <!--فونت آیکون-->
	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!--سر صفحه-->
    <?php
    $select="product";
    include '../home/php/headerWithSerch.php';
    //محتویات اصلی صفحه
    include '../home/php/controller.php';
    echo "<div class='main-content main-content_xxlg main-content_xlg main-content_lg main-content_md main-content_sm'>";
    echo "</div>";
    //پاصفحه
    include '../home/php/footer.php';
   ?>
   <script src="../home/js/ajexLike.js"></script>
   <script src="../home/js/bookmarkProduct.js"></script>
   <script src="../home/js/productBasket.js"></script>
   <script src="../home/js/cardLink.js"></script>
   <script src="../home/js/respansiveMenu.js"></script>
    <script  src="js/search.js"></script>
  </body>
</html>
