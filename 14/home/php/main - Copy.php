<main class="main-content">
      <!-- تصاویر اسلایدر-->
		<div class="w3-content w3-display-container slider">
  			<img src="home/image/image2.jpg" class="mySlides" style="width:100%">
         	<img src="home/image/image1.jpg" class="mySlides" style="width:100%">
  			<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
	   			<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10094;</div>
    			<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10095;</div>
 		  		 <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
   			 	<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
  			</div>
		</div>
          <!--product in slide -->
          <div class="swiper swiper_product-margin">
            <p class="swiper__title-swiper">گوشی موبایل</p>
            <div class="swiper-wrapper">
              <?php
                include 'home/php/controller.php';
                foreach ($products as $product)
                {
                  $id=$product['id'];
                  $name=$product['name'];
                  $price=$product['price'];
                  $property=$product['Property'];
                  $url=$product['url'];
                  echo "
                  <div class='card swiper-slide'>
                  <div class='card__img-top'>
                  <input type='hidden' value='productDetails/productDetails.php?pid={$id}'>
                   <img src='home/image/{$url}'>
                   </div>
                   <div class='card__body'>
                     <div class='card__title'>{$name}</div>
                     <p class='card__text'>
                        $price
                        تومان
                      </p>
					  ";
					//سبد خرید
					if (isset($uid))
					{
						echo "<a href='home/php/productBasket.php?pid={$id}' class=''><button class='card__productBasket btn btn_pirimary'>افزودن به سبد خرید</button></a>";
					}                 
                     //وضعیت بوک مارک
					 if(isset($bokmarkProductList))
					 {
                     $bokmarkObject='false';
                     foreach ($bokmarkProductList as $bokmarkProduct)
                     {
                       if (isset($bokmarkProduct['pid']) && $bokmarkProduct['pid']==$id)
                       {
                         echo "<a href='home/php/bookmarkProduct.php?pid={$id}' class='bookmark'><i class='fas fa-bookmark'></i></a>";
                          $bokmarkObject='true';
                       }
                     }
                     if($bokmarkObject=='false')
                     {
                         echo "<a href='home/php/bookmarkProduct.php?pid={$id}' class='bookmark'><i class='far fa-bookmark'></i></a>";
                      }
					 }
                     //وضعیت لایک محصول
					 if(isset($likeproductList))
					 {
                     $likeObject='false';
                     foreach ($likeproductList as $likeproduct)
                     {
                       if (isset($likeproduct['pid']) && $likeproduct['pid']==$id)
                       {
                         echo "<a href='home/php/like.php?pid={$id}' class='like'><i class='fas fa-heart'></i></a>";
                         $likeObject='true';
                       }
                     }
                     if($likeObject=='false')
                     {
                         echo "<a href='home/php/like.php?pid={$id}' class='like'><i class='far fa-heart'></i></a>";
                     }
					 }
                     echo "
                   </div>
                  </div>
                  ";
                }
                 ?>
          </div>

             <!-- If we need pagination -->
                  <div class="swiper-pagination"></div>
                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                  <!-- If we need scrollbar -->
                  <div class="swiper-scrollbar"></div>
          </div>
	</main>
