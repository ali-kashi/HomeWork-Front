<nav class="menu">
        <ul>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "home")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href='http://localhost:8080/c12.2.0/index.php'><i class="fas fa-home"></i>
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
		  " href="product/product.php"><i class="fab fa-product-hunt"></i>
            محصولات
          </a>
          </li>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "login")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href="login/login.php"><i class="far fa-user"></i>
            ورود به حساب کاربری
          </a>
          </li>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "basket")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href="http://localhost:8080//c12.1.0/basketBuy/basketBuy.php"><i class="fas fa-shopping-cart"></i>
            سبد خرید
          </a>
          </li>
		  <li><a class="
		  <?php
		  if(isset($select) && $select == "bookMark")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href="http://localhost:8080//c12.1.0/bookMarkProduct/bookMarkProduct.php"><i class="fas fa-bookmark"></i>
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
		  " href="http://localhost:8080//c12.1.0/likeProduct/likeProduct.php"><i class="fas fa-heart"></i>
            محصولات پسندیده شده
          </a>
          </li>
          <li><a class="
		  <?php
		  if(isset($select) && $select == "ourInformation")
		  {
			  echo 'menu__select-for-primary';
		  }
		  ?>
		  " href="#"><i class="far fa-address-card"></i>
            درباره ما
          </a>
          </li>
        </ul>
      </nav>
