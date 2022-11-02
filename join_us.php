<?php define( '_NO', 1 ); ?>
<?php
include ("block/bd.php");
$result = mysql_query ("SELECT title,meta_d,meta_k,text,id FROM common_text WHERE page='join_us'",$db);
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $myrow["meta_k"]?>; " />
<meta name="description" content=" <?php echo $myrow["meta_d"]?>; " />
<title><?php echo $myrow["title"]?></title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" /> 
<link href="CSS/podsk.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
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
<meta name="page-topic" content="DDiscounter – Home of the Dublin discounts and offers"> 
<script src="js/formchecker.js" type="text/javascript"></script>
<script src="js/podsk.js" type="text/javascript"></script>
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
<br /><Br /><br /> 
<?php
session_start (); ?>
<p class="joinForm"> * Mandatory Fields. </p> 
<form action="joiningformsend.php" method="post" name="Joining_Form" onsubmit="return check(Joining_Form)">
<div class='trform'><input type='text' name='tress' size='10'/> </div>
 <table width="100%" border="0" cellspacing="10" cellpadding="10" class="joinF" align="center">
  <tr>
    <td>*Company Name:</td>
    <td><input name="scompany" type="text" size="30" /><a href="#" class="hintanchor" onMouseover="showhint('Enter your Company Name Here.', this, event, '150px')">[?]</a></td>
  </tr>
  <tr>
    <td>*Your Offer:</td>
    <td><textarea name="soffer" cols="30" rows="10"></textarea><a href="#" class="hintanchor" onMouseover="showhint('Describe your Offer or Offers Here.', this, event, '150px')">[?]</a></td>
  </tr>
  <tr>
    <td>*Price Range &nbsp; or &nbsp; % Discount:</td>
    <td><input name="sprice" type="text" size="30" /><a href="#" class="hintanchor" onMouseover="showhint('Example: 20-30 euro or <br>30% Discount', this, event, '150px')">[?]</a></td>
  </tr>
  <tr>
    <td>*Contact Address:</td>
    <td><input name="sCaddress" type="text" size="30" /><a href="#" class="hintanchor" onMouseover="showhint('Enter full Address Here.', this, event, '150px')">[?]</a></td>
  </tr>
  <tr>
    <td>Website:</td>
    <td><input name="swebpage" type="text" size="30" /><a href="#" class="hintanchor" onMouseover="showhint('Example: www.yourcompany.com', this, event, '200px')">[?]</a></td>
  </tr>
  <tr>
    <td>*Introduction Text:</td>
    <td><textarea name="sintroduction" cols="30" rows="10"></textarea><a href="#" class="hintanchor" onMouseover="showhint('Enter company Introduction text Here.', this, event, '150px')">[?]</a></td>
  </tr>
  <tr>
    <td>*Dates when Offer available:</td>
    <td><input name="sdates" type="text" size="30" /><a href="#" class="hintanchor" onMouseover="showhint('Example: <br>From: 2009-09-01 <br>Till: 2009-09-30', this, event, '150px')">[?]</a></td>
  </tr>
    <tr>
    <td>*Email:</td>
    <td><input name="sSEmail" type="text" size="30" /><a href="#" class="hintanchor" onMouseover="showhint('Enter form senders email in case we need to contact and regulate questions. Example: yourmail@yourhost.com', this, event, '150px')">[?]</a></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="Send Form" /></td>
    </tr>
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