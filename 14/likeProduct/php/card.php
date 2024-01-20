<?php
				$adressDomain = 'http://localhost:8080//c12.2.0/';
$id=$product['id'];
					$name=$product['name'];
					$price=$product['price'];
					$property=$product['Property'];
					$url=$product['url'];
					echo "
					<div class='card swiper-slide'>
					<div class='card__img-top'>
					<input type='hidden' value='http://localhost:8080//c12.2.0/productDetails/productDetails.php?pid={$id}'>
					 <img src='{$adressDomain}home/image/{$url}'>
					 </div>
					 <div class='card__body'>
						 <div class='card__title'>{$name}</div>
						 <p class='card__text'>
								$price
								تومان
							</p>

						 <a href='http://localhost:8080//c12.2.0/home/php/productBasket.php?pid={$id}' class=''><button class='card__productBasket btn btn_pirimary'>افزودن به سبد خرید</button></a>
						 ";
						 //وضعیت بوک مارک
	 if(isset($bokmarkProductList))
	 {
						 $bokmarkObject='false';
						 foreach ($bokmarkProductList as $bokmarkProduct)
						 {
							 if (isset($bokmarkProduct['pid']) && $bokmarkProduct['pid']==$id)
							 {
								 echo "<a href='http://localhost:8080//c12.2.0/home/php/bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='fas fa-bookmark'></i></a>";
									$bokmarkObject='true';
							 }
						 }
						 if($bokmarkObject=='false')
						 {
								 echo "<a href='http://localhost:8080//c12.2.0/home/php/bookmarkProduct.php?pid={$id}' class='card__bookmark-product'><i class='far fa-bookmark'></i></a>";
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
								 echo "<a href='http://localhost:8080//c12.2.0/home/php/like.php?pid={$id}' class='card__like-product'><i class='fas fa-heart'></i></a>";
								 $likeObject='true';
							 }
						 }
						 if($likeObject=='false')
						 {
								 echo "<a href='http://localhost:8080//c12.2.0/home/php/like.php?pid={$id}' class='card__like-product'><i class='far fa-heart'></i></a>";
						 }
	 }
						 echo "
					 </div>
					</div>
					";
					?>