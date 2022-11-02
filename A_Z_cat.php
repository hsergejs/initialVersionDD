<?php define( '_NO', 1 ); ?>
<?php include "block/bd.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="A - Z catalogue" />
<meta name="description" content="DDiscounter - Home of the Dublin discounts and offers">
<title>A - Z catalogue</title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" />
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
     <td valign="top">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>
 <table width="600px" border="0" cellspacing="0" cellpadding="2px" align="center">
  <tr valign="top">
    <td width="50%" align="center">
<?php
session_start();
$_SESSION['navigation'] = array();
$myrow20 = 'SELECT UPPER(SUBSTRING(ltd_name,1,1)) AS azcat 
          FROM catalogue
          GROUP BY azcat
          ORDER BY azcat';
$myrow21 = mysql_query($myrow20);


if( mysql_num_rows( $myrow21 ) >0) {
  while( $azcat = mysql_fetch_array( $myrow21 ) ) {
    $_SESSION['navigation'][] = $azcat['azcat'];
  echo "<div id='catalogue'><a href='".$_SERVER['PHP_SELF']."?azcat=".urlencode($azcat['azcat'])."'><br>".$azcat['azcat']."</a></div>";
  }
} ?>
</td>
    <td align="left" width="50%"><?
if ( isset($_GET['azcat']) and in_array($_GET['azcat'], $_SESSION['navigation']) ) {
  $myrow20 = "SELECT * FROM catalogue 
            WHERE SUBSTRING(ltd_name,1,1) = '".$_GET['azcat']."'
            ORDER BY ltd_name";
} else {
  $myrow20 = "SELECT * FROM catalogue ORDER BY ltd_name";
}
$myrow21 = mysql_query($myrow20); 

if( mysql_num_rows( $myrow21 ) > 0 ) {
  
  
  while( $azcat = mysql_fetch_array( $myrow21 ) ) {
	  $_SESSION['navigation'][] = $azcat['ltd_name'];
    echo "<a href='".$_SERVER['PHP_SELF']."?azcat=".urlencode($azcat['link'])."'><br>".$azcat['link']."</a>";
       
  }
}
?></td>
  </tr>
</table>
</td>
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
