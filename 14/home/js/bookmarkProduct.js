//بوک مارک محصولات
var bookmark_list=document.querySelectorAll('.bookmark');
    for (var bookmark of bookmark_list)
    {
      bookmark.addEventListener('click',bookmark_function);
    }
      function bookmark_function(e)
      {
        var bookmark_icon=this.querySelector('.fa-bookmark');
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
            if(data === "add-bookmark-p")
            {
              bookmark_icon.classList.add('fas');
              bookmark_icon.classList.remove('far');
            }
            else if(data === "remove-bookmark-p")
            {
              bookmark_icon.classList.add('far');
              bookmark_icon.classList.remove('fas');
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
