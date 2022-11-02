<?php define( '_NO', 1 );
session_start();?>
<?php include "block/bd.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Definition catalogue" />
<meta name="description" content="DDiscounter - Home of the Dublin discounts and offers">
<title>Definition catalogue</title>
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
    <td width="50%">
<?php
$_SESSION['navigation'] = array();
$myrow22 = 'SELECT definition AS defcat 
          FROM catalogue 
          GROUP BY defcat
          ORDER BY defcat';
$myrow23 = mysql_query($myrow22);

if( mysql_num_rows( $myrow23 ) > 0) {
  while( $defcat = mysql_fetch_array( $myrow23 ) ) {
    $_SESSION['navigation'][] = $defcat['defcat'];
    echo '<div id="catalogue"><a href="'.$_SERVER['PHP_SELF'].'?defcat='.urlencode($defcat['defcat']).'"><br>'.$defcat['defcat'].'</a></div>';
  }
} ?>
</td>
    <td width="50%"><?
if ( isset($_GET['defcat']) and in_array($_GET['defcat'], $_SESSION['navigation']) ) {
  $myrow22 = "SELECT * FROM catalogue
            WHERE definition = '".$_GET['defcat']."'
            ORDER BY definition";
} else {
  $myrow22 = "SELECT * FROM catalogue ORDER BY definition";
}
$myrow23 = mysql_query($myrow22); 

if( mysql_num_rows( $myrow23 ) > 0 ) {


  while( $defcat = mysql_fetch_array( $myrow23 ) ) {
	  $_SESSION['navigation'][] = $defcat['ltd_name'];
    echo "<a href='".$_SERVER['PHP_SELF']."?defcat=".urlencode($defcat['link'])."'><br>".$defcat['link']."</a>";
  }
}
?></td>
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
