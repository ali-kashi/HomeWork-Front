//ایجکس معتبر کردن دیدگاه
var validRecoardList=document.querySelectorAll('.validRecoard');
for (var validRecoard of validRecoardList)
    {
      validRecoard.addEventListener('click',validRecoard_function);
    }
      function validRecoard_function(e)
      {
        e.preventDefault();
        var iconValid=this.querySelector('i');
        fetch(this.href)
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
          function(data)
          {
            if(data === "validComment")
            {
              iconValid.setAttribute("style","color:#00a715");
            }
            else if(data === "noValid")
            {
              alert("مقادیر معتبر نیست");
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
