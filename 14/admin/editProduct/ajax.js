//edit data
var submitForm=document.querySelector(".formGetInformation");
submitForm.addEventListener('submit',submitForm_function);
      function submitForm_function(e)
      {
        e.preventDefault();
        fetch(this.action,  {
        body: new FormData(this),
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
            if(data == "ok")
            {
              alert("ویرایش اطلاعات موفقیت آمیز بود")
            }
          }
        )
        .catch
        (
          function(error)
          {
          console.log(error);
          }
        )
      }
