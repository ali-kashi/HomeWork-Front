// live search
let liveSearch = document.querySelector(".header__search");
    liveSearch.addEventListener('keyup', liveSearchHandler);
    liveSearch.addEventListener('click', liveSearchHandler);
function liveSearchHandler(e){
    let q = this.value;
    // let url = 'searchProduct_controllerAjex.php?q=' + q;
    let url = `searchProduct_controllerAjex.php?q=${q}`;
    let searchResult = document.querySelector("#dataSearch");
    fetch( url )
        .then(
            function(response){
                return response.text();
            }
        )
        .then(
            function(data){
                searchResult.innerHTML = data;
            }
        )
        .catch(
            function(error){
                console.log(error);
            }
        )

}
// click filter product
let search = document.querySelector(".fa-search");
search.addEventListener('click', liveSearchClickHandler);
document.addEventListener("DOMContentLoaded", liveSearchClickHandler);
function liveSearchClickHandler() {
  var q = document.querySelector(".header__search").value;
  let url = `searchProduct_controller.php?q=${q}`;
  fetch( url )
      .then(
          function(response){
              return response.text();
          }
      )
      .then(
          function(data){
                  document.querySelector('.main-content').innerHTML=data;

          }
      )
      .catch(
          function(error){
              console.log(error);
          }
      )
}