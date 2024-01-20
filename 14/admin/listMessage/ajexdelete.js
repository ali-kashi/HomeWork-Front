var delete_list=document.querySelectorAll('.fa-eraser');
    for (var deleted of delete_list)
    {
      var father_deleted=deleted.closest("a");
      father_deleted.addEventListener('click',deleted_function);
    }
      function deleted_function(e)
      {
        e.preventDefault();
        fetch(this.href)
        .then(
          function(response)
          {
          location.reload();
          }
        )
        .catch
        (
          function(eror)
          {
          alert("ÏÑ ÍÇá ÍÇÖÑ ÓÑæíÓ ÏÑ ÏÓÊÑÓ äíÓÊ");
          }
        )
      }