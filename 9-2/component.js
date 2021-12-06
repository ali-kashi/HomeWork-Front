let icons=document.querySelectorAll(".last-icon");
for (var icon of icons) {
  icon.addEventListener("click",show);
}
function show() {
	let container=this.closest(".container");
	let password=container.querySelector(".password");
if( this.className=="last-icon fas fa-eye")
{
  this.className="last-icon fas fa-eye-slash";
  password.type="Text";
}
else
{
	this.className="last-icon fas fa-eye";
	password.type="password";
}
}
