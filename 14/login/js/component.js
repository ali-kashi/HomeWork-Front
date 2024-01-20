var phone=document.querySelector("#phone");
var pass=document.querySelector("#pass");
phone.addEventListener('keydown',temp);
phone.addEventListener('blur',validation);
pass.addEventListener('keydown',temp);
pass.addEventListener('blur',validation2);
function validation()
{
  var patern1 = /09+[0-9]{9}/mg;
      if( this.validity.valueMissing)
      {
        var error = 'این فیلد الزامی است !';
          this.setCustomValidity( error );
          this.reportValidity();
      }
      else if(!(this.value.match(patern1)))
      {
        var error = 'شماره موبایل وارد شده اشتباه است';
        this.setCustomValidity( error );
        this.reportValidity();
      }
      else if(this.value.length>11)
      {
        var error = 'شماره موبایل وارد شده اشتباه است';
        this.setCustomValidity( error );
        this.reportValidity();
      }
    else
    {
      var error = '';
      this.setCustomValidity( error );
      this.reportValidity();
    }

}
function validation2()
{
  var patern1 = /.{8}/mg;
      if( this.validity.valueMissing)
      {
        var error = 'این فیلد الزامی است !';
          this.setCustomValidity( error );
          this.reportValidity();
      }
      else if(!(this.value.match(patern1)))
      {
        var error = 'پسورد شما کوچک تر از حد مجاز است';
        this.setCustomValidity( error );
        this.reportValidity();
      }
    else if(this.checkValidity)
    {
      var error = '';
      this.setCustomValidity( error );
      this.reportValidity();
    }
}
function temp()
     {
       if(this.validity){
       var error = ' ';
       this.setCustomValidity(error);
       this.reportValidity();
     }
   }


// نمایش پسورد
let icons=document.querySelectorAll(".icon");
for (var icon of icons) {
  icon.addEventListener("click",show);
}
function show() {
	let container=this.closest(".wrap");
	let password=container.querySelector(".password");
if( this.className=="icon fas fa-eye")
{
  this.className="icon fas fa-eye-slash";
  password.type="Text";
}
else
{
	this.className="icon fas fa-eye";
	password.type="password";
}

}
