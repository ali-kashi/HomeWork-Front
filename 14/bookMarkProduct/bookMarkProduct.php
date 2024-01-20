<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محصولات ذخیره شده</title>
    <link rel="stylesheet" href="css/style.css">
    <!--فونت آیکون-->
    <link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">  </head>
  </head>
  <body>
    <!--سر صفحه-->
  <?php
  $select="bookMark";
  include '../home/php/header.php';
   ?>
    <!--منوها-->
    <?php
     ?>
      <!--قسمت اصلی سایت-->
      <div class='main-content main-content_xxlg main-content_xlg main-content_lg main-content_md main-content_sm'>
    <?php
                include 'controller.php';

                if(isset($bokmarkProductList[0]['pid']))
                {
                		foreach ($bokmarkProductList as $bokmarkProduct)
                    {
                			$product = $db->query('SELECT * FROM product where id=?',$bokmarkProduct['pid'])->fetchArray();
                  			include '../home/php/filterCard.php';
                    }
                  }
              else {
                header('location:http://localhost//c12.2.0/?bokmarkProduct=none');
              }
                 ?>
          </div>
	</main>
  <!--پاصفحه -->
  <?php
  include '../home/php/footer.php';
  ?>
    <!--script-->
    <script src="../home/js/ajexLike.js"></script>
    <script src="js/bookmarkProduct.js"></script>
    <script src="../home/js/productBasket.js"></script>
    <script src="../home/js/cardLink.js"></script>
    <script src="../home/js/respansiveMenu.js"></script>
  </body>
</html>
