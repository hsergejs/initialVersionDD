<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="CSS/cssDD.css" />
<script type="text/javascript" src="js/sendform.js" ></script>
<?php
if (isset ($_POST['scompany']));
{
$scompany = $_POST['scompany'];
}

if (isset ($_POST['soffer']));
{
$soffer = $_POST['soffer'];
}

if (isset ($_POST['sprice']));
{
$sprice = $_POST['sprice'];
}

if (isset ($_POST['sCaddress']));
{
$sCaddress = $_POST['sCaddress'];
}

if (isset ($_POST['swebpage']));
{
$swebpage = $_POST['swebpage'];
}

if (isset ($_POST['sintroduction']));
{
$sintroduction = $_POST['sintroduction'];
}

if (isset ($_POST['sdates']));
{
$sdates = $_POST['sdates'];
}

if (isset ($_POST['sSEmail']));
{
$sSEmail = $_POST['sSEmail'];
}

if ($_POST['tress'])

{ 
die ("No trespassers allowed!");
}
else 


$scompany = htmlspecialchars ($scompany);
$soffer = htmlspecialchars ($soffer);
$sprice = htmlspecialchars ($sprice);
$sCaddress = htmlspecialchars ($sCaddress);
$swebpage = htmlspecialchars ($swebpage);
$sintroduction = htmlspecialchars ($sintroduction);
$sdates = htmlspecialchars ($sdates);
$sSEmail = htmlspecialchars ($sSEmail);

$address = "admin@ddiscounter.ie";
$sub = "Joining Form from the Customer";
$ip = ($_SERVER['HTTP_X_FORWARDED_FOR'] == "" ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_X_FORWARDED_FOR']);

$smes = "Name of the Company: ".$scompany."\n 

Offer or Discount: ".$soffer."\n 

Price Range: ".$sprice."\n 

Contact Address: ".$sCaddress."\n 

Website of the Company: ".$swebpage."\n 

Introduction Text: ".$sintroduction." \n

Dates when available: ".$sdates."\n

Contact persons Email: ".$sSEmail."\n

Senders IP: ".$ip."";


$verify = mail ($address,$sub,$smes,"Content-type:text/plain; charset=utf-8\r\n");

if ($verify == 'true')
{
echo "
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
    <td height='700' align='center'></td>
<td>
<p align='center' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#441b02; font-weight:bold;'>Your form has been successfully submitted.
<br><br>
Your company will be added to our catalogues during 24 hours.
<br>
<br>
<br>
<br>
Thank you! Administration Team.
</p>

<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td align='center'><div id='sendform'></div></td>
  </tr>
</table>

 <p align='center' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#441b02; font-weight:bold;'>You can download your company logo and pictures (up to 4 pictures) through this service. (Please add your company name under pictures.)</p>
 
<table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='center'>
<div id='mainbody'>
<div id='upload'><span>Upload Your Files</span></div><span id='status' ></span><ul id='files' ></ul>
</div>
</td></tr>
</table>


<br>
<Br>
<Br>
<p align='center' style='font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#441b02; font-weight:bold;'> Back to the <a href='index.php' style='color:#ff741f; font-weight:bold;'>Home</a> page. </p>
</td>
</tr>
</table>
";
}
else 
{
echo "<p align='center' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#de671e;'> We are sorry, but the Form has not been submitted, please try again. </p> <p align='center' style='font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#441b02; font-weight:bold;'> Back to the <a href='index.php' style='color:#ff741f; font-weight:bold;'>Home</a> page. </p>";
}
?>