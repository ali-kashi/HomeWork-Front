//اضافه به سبد خرید
var productBasket_list=document.querySelectorAll('.card__productBasket');
    for (var productBasket of productBasket_list)
    {
      productBasket.addEventListener('click',productBasket_function);
    }
      function productBasket_function(e)
      {
        var link=this.closest('a');
        e.preventDefault();
        fetch(link.href)
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
          function(data)
          {
            if(data == "add-basket-p")
            {
              alert('این محصول به سبد خرید شما اضافه شد');
            }
            else if(data == "not-login")
            {
              alert("لطفا در ابتدا وارد حساب کاربری خود شوید");
            }
          }
        )
        .catch
        (
          function(eror)
          {
          alert(eror);
          }
        )
      }
