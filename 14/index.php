<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروش کده</title>
	<link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="home/css/style.css">
  </head>
	<style>
</style>
<body>
  <body>
    <!--سر صفحه-->
    <?php
    $select="home";
    include 'home/php/header.php';
    //قسمت اصلی سایت
    include 'home/php/main.php';
    //پاصفحه
    include 'home/php/footer.php';
    ?>
    <!--script-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script type="module">
    import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper()
    </script>
    <script type="text/javascript" src="home/js/javascript.js"></script>
	  <script type="text/javascript" src="home/js/slide.js"></script>
    <script src="home/js/ajexLike.js"></script>
    <script src="home/js/bookmarkProduct.js"></script>
    <script src="home/js/productBasket.js"></script>
    <script src="home/js/cardLink.js"></script>
    <script src="home/js/respansiveMenu.js"></script>
    <!--فونت آیکون
    <script src="https://kit.fontawesome.com/cde5a893d6.js" crossorigin="anonymous"></script>-->
  </body>
</html>
