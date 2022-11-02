
function check(form)
{if((form.company.value=="")||(form.offer.value=="")||(form.price.value=="")||(form.Caddress.value=="")||(form.introduction.value=="")||(form.dates.value=="")||(form.SEmail.value==""))
 {alert("We are sorry but all mandatory fields must be filled!");
 return false;} else return true;}

function check1(form1)
{if((form1.name.value=="")||(form1.sendermail.value=="")||(form1.mess.value==""))
 {alert("We are sorry but all mandatory fields must be filled!");
 return false;} else return true;}
