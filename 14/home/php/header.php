<?php
include 'class.php';
@$uid=your_session::read();
 include 'config.php';
 ?>
	<header class="header">
    <div class="headerGrid">
      <div class="name-store"><span>فروشکده</span></div>
      <!-- <div><input type="search" list="dataSearch" class="header__search" placeholder="جستجو در فروشگاه ..."></div>
      <i class="fas fa-search"></i>
      <datalist id="dataSearch" class="">
      </datalist> -->
    </div>
    </div>
    <div class="gridUnderHeader">
      <div>
	<i class="iconMenu fas fa-bars"></i>
		<nav class="menu menu-md menu-lg">
        <ul>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "home")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href='<?php echo $adressDomain ?>index.php'><i class="fas fa-home"></i>
            صفحه اصلی
          </a>
          </li>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "product")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href="<?php echo $adressDomain ?>product/product.php"><i class="fab fa-product-hunt"></i>
            محصولات
          </a>
        </li>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "basket")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href="<?php echo $adressDomain ?>basketBuy/basketBuy.php"><i class="fas fa-shopping-cart"></i>
            سبد خرید
          </a>
          </li>
        </ul>
      </nav>
    </div>
      <a class="header__login"
  <?php
  if (isset($uid))
  {
    echo "href='{$adressDomain}userPanel/panelUser.php'><i class='fas fa-tachometer-alt'></i>
         پنل کاربری";
  }
  else
    {
      echo "href='{$adressDomain}login/login.php'><i class='far fa-user'></i>
           ورود به حساب کاربری";
    }
  ?>

      </a>
      </div>
    </header>
