//آیجکس حذف دیدگاه
var deleteRecoardList=document.querySelectorAll('.deleteRecoard');
for (var deleteRecoard of deleteRecoardList)
    {
      deleteRecoard.addEventListener('click',deleteRecoard_function);
    }
      function deleteRecoard_function(e)
      {
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
            if(data === "delete")
            {
              location.reload();
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
