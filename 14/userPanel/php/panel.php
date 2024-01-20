<?php $adressDomain = 'http://localhost//storecade/';?>
      <nav class="user-Panel">
        <ul>
          <li><a href="#">
            سلام
            <?php
            include 'php/contoroller.php';
            if(isset($user))
            {
              echo $user['name'];
            }
             ?>
          </a>
          </li>
          <li><a class="
            <?php
      		  if(isset($select) && $select == "editProfile")
      		  {
      			  echo 'menu__select-for-primary';
      		  }
      		  ?>
            " href="<?php echo $adressDomain ?>userPanel/panelUser.php"><i class="far fa-user"></i>
            ویرایش پروفایل
          </a>
          </li>
          <li><a class="
    		  <?php
    		  if(isset($select) && $select == "bookMark")
    		  {
    			  echo 'menu__select-for-primary';
    		  }
    		  ?>
    		  " href="<?php echo $adressDomain ?>bookMarkProduct/bookMarkProduct.php"><i class="fas fa-bookmark"></i>
                محصولات ذخیره شده
              </a>
              </li>
    		  <li><a class="
    		  <?php
    		  if(isset($select) && $select == "likeProduct")
    		  {
    			  echo 'menu__select-for-primary';
    		  }
    		  ?>
    		  " href="<?php echo $adressDomain ?>likeProduct/likeProduct.php"><i class="fas fa-heart"></i>
                محصولات پسندیده شده
              </a>
              </li>
          <!-- <li><a href="#"><i class="fas fa-headset"></i>
            ارسال تیکت به پشتیبانی
          </a>
        </li> -->
          <li><a href="<?php echo $adressDomain ?>index.php"><i class="fas fa-home"></i>
            بازگشت به سایت
          </a>
          </li>
          <li><a href="php/contorollerExit.php?action=exit"><i class="fas fa-sign-out-alt"></i>
            خروج
          </a>
          </li>
        </ul>
      </nav>
