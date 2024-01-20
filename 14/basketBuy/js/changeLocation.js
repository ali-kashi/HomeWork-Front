// تغییر آدرس صفحه بعد از مدت زمانی
var counter=10;
var counterLabel=document.querySelector('.counter');
setTimeout(changeLocation_Function, 10000);
setTimeout(counter_function, 1000);
function counter_function()
{
    counter = counter - 1;
    counterLabel.innerText=counter;
  setTimeout(counter_function, 1000);
}
function changeLocation_Function()
{
  location.replace("../index.php");
}
