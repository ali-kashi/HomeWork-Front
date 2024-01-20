//لایک محصولات
var like_list=document.querySelectorAll('.card__like-product');
    for (var like of like_list)
    {
      like.addEventListener('click',like_function);
    }
      function like_function(e)
      {
        var like_icon=this.querySelector('.fa-heart');
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
            if(data === "add-like-p")
            {
              like_icon.classList.add('fas');
              like_icon.classList.remove('far');
            }
            else if(data === "remove-like-p")
            {
              like_icon.classList.add('far');
              like_icon.classList.remove('fas');
		location.reload();
            }
            else if(data === "not-login")
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

