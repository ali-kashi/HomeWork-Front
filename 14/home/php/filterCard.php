<?php
				$adressDomain = 'http://localhost//c12.2.0/';
                  $id=$product['id'];
                  $name=$product['name'];
                  $price=$product['price'];
                  $property=$product['property'];
                  $url=$product['url'];
                  echo "
                  <div class='card swiper-slide'>
                  <div class='card__img-top'>
                  <input type='hidden' value='",$adressDomain,"productDetails/productDetails.php?pid={$id}'>
                   <img src='",$adressDomain,"home/image/{$url}'>
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
						echo "<a href='",$adressDomain,"home/php/productBasket.php?pid={$id}' class=''><button class='card__productBasket btn btn_pirimary'>افزودن به سبد خرید</button></a>";
					}                 
                     //وضعیت بوک مارک
					 if(isset($bokmarkProductList))
					 {
                     $bokmarkObject='false';
                     foreach ($bokmarkProductList as $bokmarkProduct)
                     {
                       if (isset($bokmarkProduct['pid']) && $bokmarkProduct['pid']==$id)
                       {
                         echo "<a href='",$adressDomain,"home/php/bookmarkProduct.php?pid={$id}' class='bookmark'><i class='fas fa-bookmark'></i></a>";
                          $bokmarkObject='true';
                       }
                     }
                     if($bokmarkObject=='false')
                     {
                         echo "<a href='",$adressDomain,"home/php/bookmarkProduct.php?pid={$id}' class='bookmark'><i class='far fa-bookmark'></i></a>";
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
                         echo "<a href='",$adressDomain,"home/php/like.php?pid={$id}' class='like'><i class='fas fa-heart'></i></a>";
                         $likeObject='true';
                       }
                     }
                     if($likeObject=='false')
                     {
                         echo "<a href='",$adressDomain,"home/php/like.php?pid={$id}' class='like'><i class='far fa-heart'></i></a>";
                     }
					 }
                     echo "
                   </div>
                  </div>
                  ";
				 ?>
