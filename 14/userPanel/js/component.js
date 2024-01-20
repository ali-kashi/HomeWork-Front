var list_li=document.querySelectorAll("li");
      for (var li1 of list_li) {
          li1.addEventListener('click',addres);
      }
      function addres() {
        var a1=this.querySelector("a");
        window.location=a1.href;
      }
