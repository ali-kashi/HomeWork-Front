<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزییات محصول</title>
	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--سر صفحه-->
 <?php
 include '../home/php/header.php';
  ?>
     <!--قسمت اصلی سایت-->
     <main class="main-content main-content_sm">
      <div class="main-content__imageProduct ">
        <?php
        include 'controller.php';
		 if(isset ($Product['id']))
	 { 
			   
			if (isset($uid))
			{
				   //وضعیت بوک مارک
				   if (isset($bokmarkProduct['pid']))
				   {
					   echo "<a href='",$adressDomain,"home/php/bookmarkProduct.php?pid={$Product['id']}' class='bookmark'><i class='fas fa-bookmark'></i></a>";
				   }
					else
					{
						echo "<a href='",$adressDomain,"/home/php/bookmarkProduct.php?pid={$Product['id']}' class='bookmark'><i class='far fa-bookmark'></i></a>";
          			}
			   
		  }
          //وضعیت لایک محصول
          if (isset($uid))
		  {
			  if (isset($likeproduct['pid']))
          	{
				  echo "<a href='",$adressDomain,"home/php/like.php?pid={$Product['id']}' class='like'><i class='fas fa-heart'></i></a>";
          	}
			  else 
			{
				  echo "<a href='",$adressDomain,"home/php/like.php?pid={$Product['id']}' class='like'><i class='far fa-heart'></i></a>";
            }
		  }
        echo "<img src='",$adressDomain,"home/image/{$Product['url']}'>
        </div>
      </div>
      <div class='main-content__details'>
        <p class='details__nameProduct'>{$Product['name']}</p>
        <din class='details__grid details__grid_md'>
        <div class='details__Property'><span>ویژگی های کالا :</span><pre class='Property__attribute'>{$Product['property']}</pre></div>
        <div class='details__boldProperty'>
      <p class='details__labelPrice'>قیمت فروشگاه :</p>
      <p class='details__Price'>{$Product['price']}</p>
          <a href='../home/php/productBasket.php?pid={$Product['id']}' class='productBasket btn filled-button'>
            افزودن به سبد خرید
            <i class='fas fa-arrow-alt-circle-left'></i>
          </a>
    </div>
      </div></div>
      <!--دیدگاه -->
      <div class='feedback'>
          <form action='feedback.php' class='feedback__form'>
          <input type='hidden' name='pid' value='{$Product['id']}'>
          <label for='feedback' class='feedback__labelText'>تجربه شما از این محصول :</label>
          <textarea name='feedback' class='feedback__text'></textarea>
          <button type='submit' class='btn filled-button'>
          ارسال دیدگاه
          <i class='fas fa-arrow-alt-circle-left'></i>
          </button>
          </form>

          <div class='feedback__Title'>دیدگاه کاربران</div>
          ";
          if(isset($feedbacks[0]['pid']))
          {
            echo "<div class='feedback__viewFeedback'>";
            foreach ($feedbacks as $feedback)
            {
              echo "
              <div class='viewFeedback__comment'>
              <i class='far fa-comment'></i>
              {$feedback['comment']}
              </div>";
            }
            echo "</div>";
          }
          else {
            echo "<div class='feedback__tempComment'>هنوز دیدگاهی برای این کالا ثبت نشده است</div>";
          }
        echo "</div>";
    }
    else
    {
      header("location:$adressDomain");
    }
      ?>
    </main>
     <!--پاصفحه -->
     <?php include '../home/php/footer.php'; ?>
   <!--script-->
   <script src="../home/js/bookmarkProduct.js"></script>
   <script src="../home/js/ajexLike.js"></script>
   <script src="js/productBasket.js"></script>
	<script src="../home/js/cardLink.js"></script>
   <script src="js/feedback.js"></script>
   <script src="../home/js/respansiveMenu.js"></script>
   <!--فونت آیکون
   <script src="https://kit.fontawesome.com/cde5a893d6.js" crossorigin="anonymous"></script>-->
  </body>
</html>
