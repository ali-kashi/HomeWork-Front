<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید</title>
    <link rel="stylesheet" href="css/style.css">
    <!--فونت آیکون-->
	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <!--سر صفحه-->
  <?php
include '../home/php/config.php';
  $select="basket";
  include '../home/php/header.php';
   ?>
      <!--قسمت اصلی سایت-->
	  <main class="main-content">
		  <div class="container">
      <table class="data-table" >
        <tr>
          <th>محصول</th>
          <th></th>
          <th>تعداد</th>
          <th>قیمت واحد</th>
          <th>حذف</th>
        </tr>
		<?php
		include "controller.php";
    if (isset($basketlist[0]['uid'])) {
      $pidList=array();
      $pValueList=array();
    	foreach ($basketlist as $basket) {
        array_push($pidList,$basket['pid']);
    		$product = $db->query('SELECT * FROM product where id=? ' ,$basket['pid'])->fetchArray();
          $id=$product['id'];
          $name=$product['name'];
          $price=$product['price'];
          $url=$product['url'];
          $value=$basket['value'];
          array_push($pValueList,$value);
          echo "
          <tr class='data-table__container'>
          <input type='hidden' value='$id'>
          <td><img src='http://localhost//c12.2.0/home/image/{$url}'></td>
          <td class='data-table__nameProduce'>$name</td>
          <td><input type='number' class='data-table__number-left' min='0' value='{$value}'></td>
          <td class='data-table__number-left data-table__price'>$price</td>
          <td><a href='controller-delete.php?id={$id}'><i class='fas fa-eraser'></i></a></td>
          </tr>
          "		;
    }
    }
    else {
      header('location:localhost/storecade?BasketBuy=none');
    }
    $db->close();
		?>
    </table>
		  </div>
    <div class="fulBuy">
      <p class="fulBuy__labelPrice">مبلغ قابل پرداخت :</p>
      <p class="fulBuy__totalPrice"><?php echo $value*$price ?></p>
          <a href="#SendInformation" class="fulBuy__btn btn filled-button">
            ادامه فرایند خرید
            <i class="fas fa-arrow-alt-circle-left"></i>
          </a>
    </div>
    <div id="SendInformation" class='SendInformation'>
      <div class="labelTitr">
        اطلاعات ارسال
      </div>
      <form action="orders.php" class="formGetInformation" method="post">
      <div class="containerInput">
        <div class="gridFull">
        <input type="hidden" name="pidList" value="<?php foreach ($pidList as $value) {
          echo "$value"."&&";
        } ?>">
        <label for="address">آدرس پستی*</label>
        <input type="text" id="address" name="address" value="<?php if(isset($order['id'])){echo $order['address']; } ?>" class="input_sizeLg" required placeholder="آدرس پستی">
        <p class="containerInput__Helper-text">آدرس تحویل سفارش خود را وارد کنید</p>
        </div>
        <div>
        <label for="plaque">پلاک*</label>
        <input type="text"  id="plaque" name="plaque" required placeholder="پلاک" value="<?php if(isset($order['id'])){echo $order['plaque']; } ?>">
        </div>
        <div>
        <label for="unit">واحد*</label>
        <input type="text" id="unit" name="unit" value="<?php if(isset($order['id'])){echo $order['unit']; } ?>" required placeholder="واحد">
        </div>
        <div>
        <label for="postalCode">کدپستی*</label>
        <input type="text" id="postalCode" name="postalCode" value="<?php if(isset($order['id'])){echo $order['postalCode']; } ?>" pattern="[0-9]{10}" required placeholder="کد پستی">
        <p class="containerInput__Helper-text">کدپستی باید ۱۰ رقم و بدون خط تیره باشد</p>
        </div>
        <!-- خط جداکننده -->
        <div class="split"></div>
        <div>
        <label for="name">نام گیرنده*</label>
        <input type="text" id="name" name="name" value="<?php if(isset($order['id'])){echo $order['name']; } ?>" required placeholder="نام گیرنده">
        </div>
        <div>
        <label for="family">فامیل گیرنده*</label>
        <input type="text" id="family" name="family" value="<?php if(isset($order['id'])){echo $order['family']; } ?>" required placeholder="فامیل گیرنده">
        </div>
        <div>
        <label for="contactNumber">شماره تماس*</label>
        <input type="text" id="contactNumber" name="contactNumber" value="<?php if(isset($order['id'])){echo $order['contactNumber']; } ?>" pattern="[0-9]{11}" required placeholder="شماره تماس">
        <p class="containerInput__Helper-text">مثل: ۰۹۱۲۳۴۵۶۷۸۹</p>
        </div>
        <!-- خط جداکننده -->
        <div class="data"></div>
        <div class="gridFull">
        <label for="data">تاریخ ارسال</label>
        <input type="date" id="data" name="data" value="<?php if(isset($order['id'])){echo $order['data']; } ?>">
        <p class="containerInput__Helper-text">زمان تحویل در بازه ی 9 صبح تا 22 شب است .</p>
      </div>
      </div>
      <button type='submit' class='btn_size_md btn filled-button'>
        ثبت اطلاعات
        <i class='fas fa-arrow-alt-circle-left'></i>
      </button>
    </form>
    </div>
    <?php
    include 'factor.php';
    if(isset($order['id']) && !isset($factor))
    {
    echo "<div id='factor' class='factor'>
      <div class='labelTitr'>فاکتور</div>
      <div>هزینه ی اقلام سفارش : $Prices تومان</div>";
      //ایا هزینه بالای 300 هزار تومان است
      if(isset($transportFree))
      {
        echo "<div>هزینه ی ارسال : $transport تومان ( $transportFree )</div>";
      }
      else {
        echo "<div>هزینه ی ارسال : $transport تومان</div>";
      }
      echo "
      <div>هزینه ی ارزش افزوده : $valueAdded تومان</div>
      <div class='factorTotalPrice_weight_bold'>جمع کل سفارش شما : $totalPrice تومان</div>
      <a href='finalPayment.php?oid={$order['id']}' class='btn_size_md btn filled-button'>
        پرداخت
        <i class='fas fa-arrow-alt-circle-left'></i>
      </a>
  </div>";
    }
      ?>
	</main>
  <!--پاصفحه -->
  <?php
  include '../home/php/footer.php';
  ?>
    <!--script-->
    <script src="../home/js/respansiveMenu.js"></script>
    <script src="js/component.js"></script>
  </body>
</html>
