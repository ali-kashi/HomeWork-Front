let iconMenu=document.querySelector(".iconMenu");
  iconMenu.addEventListener("click",showMenu_function);
	window.addEventListener("resize",showMenuLg_function);
function showMenu_function() {
if( this.classList.contains("fa-bars"))
{
  this.classList.remove("fa-bars");
  this.classList.add("fa-times");
  document.querySelector(".user-Panel").setAttribute("style","display:block,background-color:#ff0000");
}
else
{
  this.classList.add("fa-bars");
  this.classList.remove("fa-times");
  document.querySelector(".user-Panel").setAttribute("style","display:none");
}
}
function showMenuLg_function() {
	if(getComputedStyle(iconMenu).getPropertyValue('visibility') == 'visible' && iconMenu.classList.contains("fa-bars") )
	{
		document.querySelector(".menu-md").setAttribute("style","display:none");

	}
	else if (getComputedStyle(iconMenu).getPropertyValue('visibility') == 'hidden') {
		document.querySelector(".menu-md").setAttribute("style","display:block");
	}
}
