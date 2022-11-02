<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='refresh' content='7;URL=http://www.ddiscounter.ie/index.php'>
</head>
<body bgcolor="#FFFFFF">
<table width="50%" cellpadding="10" cellspacing="10"  align="center">
<tr> 
<td align="left" bgcolor="#FFBF80">
<?
if (isset ($_POST['name']));
{
$name = $_POST['name'];
}
if (isset ($_POST['email']));
{
$email = $_POST['email'];
}
if (isset ($_POST['yourname']));
{
$yourname = $_POST['yourname'];
}

$name = htmlspecialchars ($name);
$email = htmlspecialchars ($email);
$yourname = htmlspecialchars ($yourname);

?>
<?php
$sub = "Website recommentation from $yourname";
$headers = "From: admin@ddiscounter.ie";
$mes = "Hi there ".$name.". It is ".$yourname.". I found the website about offers and discounts in Dublin and area (www.ddiscounter.ie). It’s worth to visit it. I’m sure you will find something interesting on it.";
$verify = mail ($email,$sub,$mes,$headers,"Content-type:text/plain; charset=windows-1251");
if ($verify= 'true')
{
?>
<p>Thank you, <? echo $yourname;?>. Your message have been successfully sent to <? echo $name;?>. <br /></p>
<p> We thank you for your time visiting us <? echo $yourname;?>. </p>
<p align="center"><br>
  <strong>DDiscounter Staff</strong><br> <? $date= date("d.m.Y"); echo $date;?>
<br /><br />
<p align="right">You will be redirected to the home page, after 10 seconds.</p>  
<?
}
else 
{
echo "<p>We apologise for inconvenience but your message have not been sent.</p>";
}
?>
<?
$adress = "admin@ddiscounter.ie";
$subject = "Sended recommendation";
$message = "Sended recommendation from DDiscounter.ie 

Sended to: ".$name."\n    
Sended to Email: ".$email." \n    
Sended from: ".$yourname;
mail ($adress,$subject,$message);
 ?>

</p></td></tr></table>
</body>
</html>