<?php define( '_NO', 1 ); ?>
<?php
include ("block/bd.php");
$result = mysql_query ("SELECT title,meta_d,meta_k,text,id FROM common_text WHERE page='contact_us'",$db);
if (!$result)
{
echo "<p>Sorry, but the request for database haven't passed.
<br>Please report to administration by admin@dd.ie
<br> <strong> Mistake Code: </strong> </p>";
exit (mysql_error());
}
if (mysql_num_rows($result) > 0)
{
$myrow = mysql_fetch_array ($result);
}
else {
echo "<p>The information from database couldn't be reached, no information inside.</p>";
}
?>
<?php 
if($_POST['submit']) 
{ 


if ($_POST['tress'])

{ 
die ("No trespassers allowed!");
}
else 


        $stitle = substr(htmlspecialchars(trim($_POST['stitle'])), 0, 1000); 
        $smess =  substr(htmlspecialchars(trim($_POST['smess'])), 0, 1000000);
	     $sname = substr(htmlspecialchars(trim($_POST['sname'])), 0, 1000); 
        $from = substr(htmlspecialchars(trim($_POST['ssendermail'])), 0, 1000);
		$ip = ($_SERVER['HTTP_X_FORWARDED_FOR'] == "" ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_X_FORWARDED_FOR']);   
	   
	  $smess = $smess."\n 
	  
	  Subject of the message: ".$stitle."\n
	  
	  Senders Name: ".$sname."\n
	  
	  Senders Email: ".$from."\n
	  
	  Senders IP: ".$ip;
	  
        $to = 'admin@ddiscounter.ie'; 
		$headers = 'Content-type:text/plain; charset = windows-1251';
         
        mail($to, $stitle, $smess, $headers,'Content-type:text/plain; charset = windows-1251\r\nFrom:'.$from); 
} ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta name="keywords" content="<?php echo $myrow["meta_k"]?>; " />
<meta name="description" content=" <?php echo $myrow["meta_d"]?>; " />
<title><?php echo $myrow["title"]?></title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" /> <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<!--[if IE 7]>
<link rel="stylesheet" media="screen" type="text/css" title="StyleIE7" href="CSS/ie7.css" />
<![endif]-->
<meta name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="2 week"> 
<meta http-equiv="content-language" content="English"> 
<meta name="author" content="ddiscounter">  
<meta name="publisher" content="www.ddiscounter.ie">  
<meta name="made" content="admin@ddiscounter.ie">  
<meta name="copyright" content="www.ddiscounter.ie">  
<meta name="audience" content="All">  
<meta name="page-topic" content="ddiscounter – Home of the Dublin discounts and offers"> 
<script src="js/formchecker.js" type="text/javascript"></script>
</head>
<body>
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" height="657" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php include "block/header.php";?>       
    </table>
    <table  width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
<?php include "block/menu.php";  ?>
  </tr>
</table>
</td>
  </tr>
</table>
      <table width="100%" border="0" cellspacing="15" cellpadding="15">
        <tr>
 <td height="530" valign="top"><?php echo $myrow["text"];?>
<p class="joinForm"> *mandatory fields </p>

<?php 
if($_POST['submit']) {
echo "<center><p style='margin:40px;'><strong>Thank you! We will reply to you as soon as possible.</strong></p></center>" ;} ?>


<form action="contact_us.php" method="POST" name="contacts" onsubmit="return check1(contacts)">
<div class='trform'><input type='text' name='tress' size='10'/> </div>
<table width="40%" border="0" cellspacing="10" cellpadding="10" align="center" class="joinF">
  <tr>
    <td>*Name:</td>
    <td><input type="text" name="sname" size="30"></td>
  </tr>
  <tr>
    <td>*Email:</td>
    <td><input type="text" name="ssendermail" size="30"></td>
  </tr>
  <tr>
    <td>Subject:</td>
    <td><input type="text" name="stitle" size="30"></td>
  </tr>
  <tr>
    <td valign="top">*Message:</td>
    <td><textarea name="smess" rows="10" cols="30"></textarea></td>
  </tr>
  <tr >
  	<td>
  	</td>
  	<td align="center"><p><input type="submit" value="Send" name="submit"></p>
  	</td>
</table>

</form> 
 </td>
<?php  include "block/rightblock.php";    ?>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
<?php include "block/footer.php";?>
        </tr>
      </table>
      </td>
  </tr>
</table>
</body>
</html>
