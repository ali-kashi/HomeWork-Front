<?php $adressDomain = 'http://localhost//c12.2.0/';?>
      <nav class="user-Panel">
        <ul>
          <li><a href="#">
            سلام
            <?php
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
            " href="<?php echo $adressDomain ?>admin/panalAdmin/panelAdmin.php"><i class="far fa-user"></i>
            ویرایش پروفایل
          </a>
          </li>
          <li><a class="
            <?php
      		  if(isset($select) && $select == "addProduct")
      		  {
      			  echo 'menu__select-for-primary';
      		  }
      		  ?>
            " href="<?php echo $adressDomain ?>admin/addProduct/addProduct.php"><i class="fab fa-product-hunt"></i>
            اضافه کردن محصول
          </a>
          </li>
          <li><a class="
            <?php
      		  if(isset($select) && $select == "listComment")
      		  {
      			  echo 'menu__select-for-primary';
      		  }
      		  ?>
            " href="<?php echo $adressDomain ?>admin/validComment/listComment.php"><i class="far fa-address-card"></i>
            لیست دیدگاه ها
          </a>
          </li>
          <li><a class="
            <?php
            if(isset($select) && $select == "listProducs")
            {
              echo 'menu__select-for-primary';
            }
            ?>
            " href="<?php echo $adressDomain ?>admin/listProducs/listProducs.php"><i class="fab fa-product-hunt"></i>
            لیست محصولات
          </a>
          </li>
		  <!-- <li><a class="
            <?php
            if(isset($select) && $select == "listMessage")
            {
              echo 'menu__select-for-primary';
            }
            ?>
            " href="<?php echo $adressDomain ?>admin/listMessage/listMessage.php"><i class="far fa-address-card"></i>
            لیست پیام ها
          </a>
          </li> -->
          <li><a class="
            <?php
            if(isset($select) && $select == "listUsers")
            {
              echo 'menu__select-for-primary';
            }
            ?>
            " href="<?php echo $adressDomain ?>admin/listUsers/listUsers.php"><i class="far fa-user"></i>
            لیست کاربران
          </a>
          </li>
          <li><a href="<?php echo $adressDomain ?>index.php"><i class="fas fa-home"></i>
            بازگشت به سایت
          </a>
          </li>
          <li><a href="<?php echo $adressDomain ?>userPanel/php/contorollerExit.php?action=exit"><i class="fas fa-sign-out-alt"></i>
            خروج
          </a>
          </li>
        </ul>
      </nav>
