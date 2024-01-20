//اعتبار سنجی
﻿var phone=document.querySelector("#Phone");
var pass=document.querySelector("#Pass");
var RePass=document.querySelector("#RePass");
﻿var fullName=document.querySelector("#FullName");
phone.addEventListener('blur',validation);
pass.addEventListener('blur',validation2);
RePass.addEventListener('blur',validationPass);
fullName.addEventListener('blur',validation3);
phone.addEventListener('keydown',temp);
pass.addEventListener('keydown',temp);
fullName.addEventListener('keydown',temp);
RePass.addEventListener('keydown',temp);
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

function validation3()
{
  var patern1 = /[ a-zا-ی]{7}/mg;
      if( this.validity.valueMissing)
      {
        var error = 'این فیلد الزامی است !';
          this.setCustomValidity( error );
          this.reportValidity();
      }
      else if(!(this.value.match(patern1)))
      {
        var error = 'لطفا نام و نام خانوادگی خود را صحیح وارد کنید';
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
function validationPass()
{
  var pass=document.querySelector("#Pass").value;
  var RePass=this.value;
  if (pass != RePass)
  {
    var error = 'شما پسورد خود را صحیح تکرار نکرده اید ';
    this.setCustomValidity( error );
    this.reportValidity();
  }
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
        if (pass != RePass)
        {
          var error = 'شما پسورد خود را صحیح تکرار نکرده اید ';
          this.setCustomValidity( error );
          this.reportValidity();
        }
        else {
          var error = '';
          this.setCustomValidity( error );
          this.reportValidity();
        }      
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
	let container=this.closest(".group");
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
