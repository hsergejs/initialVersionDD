<?php define( '_NO', 1 ); ?>
<?php include "block/bd.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="search results" />
<meta name="description" content="DDiscounter - Home of the Dublin discounts and offers">
<title>Search Results</title>
<link href="CSS/cssDD.css" rel="stylesheet" type="text/css" /> <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<!--[if IE 7]>
<link rel="stylesheet" media="screen" type="text/css" title="StyleIE7" href="CSS/ie7.css" />
<![endif]-->
<meta name="robots" content="INDEX,FOLLOW"> 
<meta name="revisit-after" content="2 week"> 
<meta http-equiv="content-language" content="English"> 
<meta name="author" content="ddiscounter">  
<meta name="publisher" content="www.ddiscounter.ie">  
<meta name="made" content="admin@ddiscounter">  
<meta name="copyright" content="www.ddiscounter.ie">  
<meta name="audience" content="All">  
<meta name="page-topic" content="ddiscounter – Home of the Dublin discounts and offers"> 
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
 <td valign="top" class="search">
<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 800;
  var googleSearchDomain = "www.google.ie";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
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