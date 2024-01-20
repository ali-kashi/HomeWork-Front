//لینک کارد
var cardList=document.querySelectorAll('.card__img-top');
    for (var card of cardList)
    {
      card.addEventListener('click',card_function);
    }
      function card_function()
      {
        var url=this.querySelector('input[type=hidden]').value;
        window.location=url;
      }

var cardList=document.querySelectorAll('.card__title');
    for (var card of cardList)
    {
      card.addEventListener('click',card_function);
    }
      function card_function()
      {
	var url=this.closest('.card').querySelector('input[type=hidden]').value;
        window.location=url;
      }
var cardList=document.querySelectorAll('.card__text');
    for (var card of cardList)
    {
      card.addEventListener('click',card_function);
    }
      function card_function()
      {
        var url=this.closest('.card').querySelector('input[type=hidden]').value;
        window.location=url;
      }
