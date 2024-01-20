//editValueProduct
var valueProductList=document.querySelectorAll('.data-table td > input[type=number]');
    for (var valueProduct of valueProductList)
    {
      valueProduct.addEventListener('change',valueProduct_function);
    }
      function valueProduct_function()
      {
        var pid=this.closest('tr').querySelector('input[type=hidden]').value;
        var valueProduct=this.value;
        var url="editValue.php?basketProductValue="+valueProduct+"&pid="+pid;
        fetch(url)
        .then(
                  function(response){
                      return response.text();
                  }
              )
        .then(
          function(data)
          {
          }
        )
        ;
        totalPrice_function();
      }

//TotalPrice
totalPrice_function();
function totalPrice_function() {
var BasketProductRecordList=document.querySelectorAll('.data-table__container');
var totalPrice=0;
for (var BasketProductRecord of BasketProductRecordList)
{
  var valueProduct=BasketProductRecord.querySelector('.data-table td > input[type=number]');
  var priceProduct=BasketProductRecord.querySelector('.data-table__price');

  totalPrice =valueProduct.value*priceProduct.innerText+totalPrice;
}
document.querySelector('.fulBuy__totalPrice').innerText=totalPrice;
}

//deleteRowBasketBuy
var iconDeleteList=document.querySelectorAll(".fa-eraser");
for (var iconDelete of iconDeleteList)
{
    var iconDeleteLink=iconDelete.closest('a');
    iconDeleteLink.addEventListener('click',deleteRowBasketBuy_function);
}
function  deleteRowBasketBuy_function(e) {
  e.preventDefault();
  fetch(this.href)
  .then(
            function(response){
                return response.text();
            }
        )
  .then(
    function(data)
    {
      if(data === "deleteRowBasketBuy")
      {
        location.replace("basketBuy.php?factor=none");
      }
    }
  )
  .catch(
    function(error) {
      alert(error);
    }
  )
}

//insertInformation in ordersTabel
var submitForm=document.querySelector(".formGetInformation");
submitForm.addEventListener('submit',submitForm_function);
      function submitForm_function(e)
      {
        e.preventDefault();
         var inputList=this.querySelectorAll('input');
         let formData = new FormData();
         for (var input of inputList)
         {
           formData.append(input.name, input.value);
         }
        fetch(this.action,  {
        body: formData,
        method: "post"
    })
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
          function(data)
          {
            if(data === "addInformation")
            {
              location.reload();
              location.replace("basketBuy.php#factor");
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
