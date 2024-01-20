//اجکس ارسال دیدگاه کاربران به دیتابیس
var feedbackForm=document.querySelector('.feedback__form');
      feedbackForm.addEventListener('submit',feedbackForm_function);
      function feedbackForm_function(e)
      {
      var pid=this.querySelector('input[type=hidden]').value;
      var comment=this.querySelector('textarea');
        e.preventDefault();
        var url=this.action+"?pid="+pid+"& feedback="+comment.value;
        fetch(url)
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
          function(data)
          {
            if(data === "feedbackInsert")
            {
              alert("دیدگاه شما با موفقیت ثبت شد");
              comment.value="";
            }
            else if(data === "noValid")
            {
              alert("مقادیر معتبر نیست");
            }
            else if(data === "noLogin")
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
