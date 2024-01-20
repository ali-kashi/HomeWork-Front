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
                include 'home/php/card.php';
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
