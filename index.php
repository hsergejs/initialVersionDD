<?php define( '_NO', 1 ); ?>
<?php
include ("block/bd.php");
$result = mysql_query ("SELECT title,meta_d,meta_k,text,id FROM common_text WHERE page='index'",$db);
if (!$result)
{
echo "<p>Sorry, but the request for database haven't passed.
<br>Please report to administration by admin@ddiscounter.ie
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
<META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
<meta name="keywords" content="<?php echo $myrow["meta_k"]?>; " />
<meta name="description" content=" <?php echo $myrow["meta_d"]?>; " />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
<title><?php echo $myrow["title"]?></title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" /> 
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
<meta name="page-topic" content="ddiscounter – Home of the Dublin discounts and offers"> 
<META name="y_key" content="9d64fd757bd3264a">
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery-1.3.1.min.js"></script>
<script src="js/promojs.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/promocss.css" />
</head>
<body>
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
 <td height="530" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td height="240" valign="top">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="125px" valign="top"><div id="promoindex">
<div class="item">
	<a href="http://www.ddiscounter.ie/yamamori_sushi.php"><img src="img/promo/yamamori.jpg"s alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie/yamamori_sushi.php">Yamamori Sushi</a>
		<a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie/yamamori_sushi.php"><p>Our Offers:
1.Lunch specials, 2.Dinner specials<p></a>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind2.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>	</div>
</div>

<div class="item">
	<a href="http://www.ddiscounter.ie"><img src="img/promo/promoind1.png" alt="Dublin Discounter" title="" width="105" height="105"/></a>
	<div class="caption">
		<a target="_blank" href="http://www.ddiscounter.ie">Dublin Discounter</a>
		<p><a style="font-size:10px; color:#FFF" target="_blank" href="http://www.ddiscounter.ie">Advertising text here, describing offer.</a></p>
	</div>
</div>


</div></td>
    <td valign="top"><?php echo $myrow["text"]?></td>
  </tr>
</table>

</td>
</tr>
</table></td>
<?php  include "block/rightblock.php";    ?>
</table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php include "block/footer.php";?>  
</table>
</td>
  </tr>
</table>
</body>
</html>
