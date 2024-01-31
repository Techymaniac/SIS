function checkDate(dobStr)
{
var arr = dobStr.split(/-/);
if(arr.length != 3){
return false;
}
var ddStr = arr[0];
var mmStr = arr[1];
var yyStr = arr[2];
if(isNaN(ddStr)){
return false;
}
if(isNaN(mmStr)){
return false;
}
if(isNaN(yyStr)){
return false;
}
dd=parseInt(ddStr,10);
mm=parseInt(mmStr,10);
yy=parseInt(yyStr,10);
if(dd < 1 || dd > 31){
return false;
}
if(mm < 1 || mm > 12){
return false;
}
if(yy < 1900){
return false;
}
if(yy > 3000){
return false;
}
switch (mm){
case 1:
case 3:
case 5:
case 7:
case 8:
case 10:
case 12:
return true;
case 4:
case 6:
case 9:
case 11:
if(dd<=30)
return true;
else
return false;
case 2:
if(yy%100==0)
{ if(yy%400==0)
{
if(dd<=29)
return true;
else
return false;
}
}
else
{ if(yy%4==0){
if(dd<=29)
return true;
else
return false;
}
}
if(dd<=28)
{ return true;
}
else
{ return false;
}
default :
return false;
}
}
function emailValidator(elem)
{
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if(elem.match(emailExp))
{
return true;
}
else
{
return false;
}
}